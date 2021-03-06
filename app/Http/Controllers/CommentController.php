<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Comment;

use Mail;

use Session;

use Input;

use Hash;

use Twitter;

use Carbon\Carbon;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $messages = Comment::where('validated', '=', true)->where('created_at', '>=', Carbon::now()->subMonth())->orderBy('city', 'ASC')->orderBy('created_at', 'DESC')->get();

        $data = array(
            'comments' => $messages,
            'province' => null,
            'sport' => null,
            'fromMain' => true
            );

        return view('Messages.index')->withData($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Messages.create');
    }

    private function getRandomString($length) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $string = '';

        for ($i = 0; $i < $length; $i++) {
            $string .= $characters[mt_rand(0, strlen($characters) - 1)];
        }

        return $string;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array(
               'name' => 'required|max:100',
               'subject' => 'required|max:60',
               'email' => 'required|email|max:100',
               'sport' => 'required|max:50',
               'message' => 'required|max:1000',
               'province' => 'required|max:100',
               'city' => 'required|max:100',
               'g-recaptcha-response' => 'required|captcha',
               'password' => 'required|min:6|max:30'
            ));

        $comment = new Comment;
        $comment->fill($request->all());
        $comment->password = Hash::make($request['password']);
        $comment->validated = 1;
        $comment->authToken = $this->getRandomString(25);
        $comment->save();

        $email_data = array(
            'name' => $comment->name,
            'city' => $comment->city,
            'province' => $comment->province,
            'sport' => $comment->sport,
            'email' => $comment->email,
            'bodyMessage' => $comment->message,
            'subject' => $comment->subject,
            'person' => $comment->person
        );

        Mail::send('Emails.createMessage', $email_data, function($message) use ($comment)
        {
            $message->to('recreationalleagues@gmail.com', 'Bob Whitaker')
                ->subject('Message posted on bulletin board');
        });

        Twitter::postTweet(array('status' => 'New Message posted on the bulletin board! City: ' . $comment->city . ' - Topic: ' . $comment->subject . ' recreationalleagues.ca/bulletinboard#' . $comment->id, 'format' => 'json'));

        Session::flash('success', 'Your message has been added.');

        return redirect()->action('CommentController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $message = Comment::find($id);

        if ($message == null)
        {
            Session::flash('error', 'The message does not exist.');
            return redirect('/');
        }

        return view('Messages.edit')->withMessage($message);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, array(
               'name' => 'required|max:100',
               'subject' => 'required|max:140',
               'email' => 'required|email|max:100',
               'sport' => 'required|max:50',
               'message' => 'required|max:1000',
               'province' => 'required|max:100',
               'city' => 'required|max:100',
               'g-recaptcha-response' => 'required|captcha',
               'password' => 'required|min:6|max:30'
            ));

        $comment = Comment::find($id);

        if ($comment == null or !Hash::check($request['password'], $comment->password))
        {
            Session::flash('error', 'Incorrect password.');
            return redirect('/');
        }
        $comment->fill($request->all());

        $comment->save();

        $email_data = array(
            'name' => $comment->name,
            'city' => $comment->city,
            'province' => $comment->province,
            'sport' => $comment->sport,
            'email' => $comment->email,
            'bodyMessage' => $comment->message,
            'subject' => $comment->subject,
            'person' => $comment->person
        );

        Mail::send('Emails.createMessage', $email_data, function($message) use ($comment)
        {
            $message->to('recreationalleagues@gmail.com', 'Bob Whitaker')
                ->subject('Edit Message On Bulletin Board');
        });

        Session::flash('success', 'Your message has been updated.');

        return redirect()->action('CommentController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Comment::destroy($id);
        return redirect()->action('CommentController@index');
    }

    public function confirmMessage($id, $authToken)
    {
        $message = Comment::find($id);
        if ($message == null || $message->authToken != $authToken || $message->validated)
        {
            Session::flash('error', 'The message does not exist.');
            return redirect()->action('CommentController@index');
        }

        $message->validated = true;
        $message->save();

        Session::flash('success', 'The message has been approved.');
        return redirect()->action('CommentController@index');
    }

    public function denyMessage($id, $authToken)
    {
        $message = Comment::find($id);

        if ($message == null || $message->authToken != $authToken || $message->validated)
        {
            Session::flash('error', 'The message does not exist.');
            return redirect()->action('CommentController@index');
        }

        $message->delete();

        Session::flash('success', 'The message has been denied.');
        return redirect()->action('CommentController@index');
    }

    public function reply(Request $request)
    {
        $comment = Comment::find($request->id);

        if ($comment == null)
        {
            Session::flash('error', 'The comment does not exist.');
            return redirect()->action('CommentController@index');
        }

        $email_data = array(
            'email' => $request->email,
            'bodyMessage' => $request->message,
        );

        Mail::send('Emails.replyMessage', $email_data, function($message) use ($comment)
        {
            $message->to($comment->email, 'Recreational Leagues')
                ->subject('You got a response to your message on the bulletin board!');
        });

        Session::flash('success', 'Your reply has been sent.');

        return redirect()->action('CommentController@index');
    }

    public function getMessages()
    {
        $params = Input::all();
        return redirect()->action('CommentController@filter', [$params['province'], $params['sport']]);
    }

    public function filter($province, $sport)
    {
        $comments = Comment::where(array('Province' => $province, 'Sport' => $sport, 'validated' => true))->orderBy('city', 'ASC')->orderBy('created_at', 'DESC')->get();

        $data = array(
            'comments' => $comments,
            'province' => $province,
            'sport' => $sport,
            'fromMain' => false
        );

        return view('Messages.index')->withData($data);
    }

    public function getAdminPage()
    {
        $messages = Comment::where('validated', '=', true)->orderBy('city', 'DESC')->orderBy('created_at', 'DESC')->get();

        $data = array(
            'comments' => $messages,
            'province' => null,
            'sport' => null,
            'fromMain' => true
            );

        return view('Messages.index')->withData($data);
    }
}
