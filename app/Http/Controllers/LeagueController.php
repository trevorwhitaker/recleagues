<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\League;

use App\City;

use Session;

use Input;

use Mail;

use DB;

class LeagueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array(
            'fromMain' => true,
            'province' => null,
            'sport' => null,
            'type' => null);
        return view('Leagues.index')->withData($data);
    }

    private function getIdByTitle($title)
    {
        $parts = explode('-', $title);
        return end($parts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Leagues.create');
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
               'leagueName' => 'required|max:250',
               'province' => 'required',
               'sport' => 'required|max:50',
               'type' => 'required',
               'website' => 'max:250',
               'person' => 'max:100',
               'phone' => 'max:20',
               'email' => 'required|email|max:100',
               'description' => 'max:250',
               'g-recaptcha-response' => 'required|captcha'
            ));


        if (City::where([['province', '=', $request->province], ['city', '=', $request->city]])->get() == null)
        {
            return Redirect::back()->withInput(Input::all());
        }
        $league = new League;
        $league->leagueName = $request->leagueName;
        $league->city = $request->city;
        $league->province = $request->province;
        $league->sport = $request->sport;
        $league->type = join(", ", $request->type);
        $league->website = $request->website;
        $league->person = $request->person;
        $league->phone = $request->phone;
        $league->email = $request->email;
        $league->description = $request->description;
        $league->authToken = 'new' . $this->getRandomString(25);

        $league->save();

        // send email here to validate with id field. Store the object and set flag to false. Change when link is clicked.

        $email_data = array(
            'leagueName' => $league->leagueName,
            'city' => $league->city,
            'province' => $league->province,
            'sport' => $league->sport,
            'type' => $league->type,
            'website' => $league->website,
            'person' => $league->person,
            'phone' => $league->phone,
            'email' => $league->email,
            'description' => $league->description,
            'authtoken' => $league->authToken,
            'id' => $league->id,
        );

        Mail::send('Emails.request', $email_data, function($message) use ($league)
            {
              $message->to('recreationalleagues@gmail.com', 'Bob Whitaker')
                      ->subject('Add League request from '. $league->leagueName);
            });

        Session::flash('success', 'The request has been sent for approval.');

        return redirect()->action('PagesController@getIndex');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $num = $this->getIdByTitle($id);
        $league = League::find($num);
        if ($league == null || !$league->validated)
        {
            Session::flash('error', 'The league does not exist.');
            return redirect('/');
        }
        return view('Pages.leaguePage')->withLeague($league);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $league = League::find($id);
        if ($league == null || !$league->validated)
        {
            Session::flash('error', 'The league does not exist.');
            return redirect('/');
        }

        return view('Leagues.editLeague')->withLeague($league);
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
        $league = League::find($id);
        if ($league == null || !$league->validated)
        {
            Session::flash('error', 'The league does not exist.');
            return redirect('/');
        }

        $oldEmail = $league->email;
        $oldName = $league->person;
        $oldLeagueName = $league->leaguename;

        $this->validate($request, array(
               'leaguename' => 'required|max:250',
               'city' => 'required|max:50',
               'province' => 'required|max:50',
               'sport' => 'required|max:50',
               'type' => 'required',
               'website' => 'url|max:250',
               'person' => 'max:100',
               'phone' => 'max:20',
               'email' => 'required|email|max:100',
               'description' => 'max:250',
               'g-recaptcha-response' => 'required|captcha'
            ));

        $league->fill($request->all());
        if (isset($request->type))
        {
            $league->type = join(", ", $request->type);
        }
        $league->validated = 0;
        $league->authToken = 'old' . $this->getRandomString(25);
        $league->save();

        // send email here to validate with id field. Store the object and set flag to false. Change when link is clicked.

        $email_data = array(
            'leagueName' => $league->leaguename,
            'city' => $league->city,
            'province' => $league->province,
            'sport' => $league->sport,
            'type' => $league->type,
            'website' => $league->website,
            'person' => $league->person,
            'phone' => $league->phone,
            'email' => $league->email,
            'description' => $league->description,
            'authtoken' => $league->authToken,
            'id' => $league->id,
        );

        Mail::send('Emails.request', $email_data, function($message) use ($league)
            {
              $message->to('recreationalleagues@gmail.com', 'Bob Whitaker')
                      ->subject('Edit League request from '. $league->leagueName);
            });

        $notify_data = array(
            'leagueName' => $league->leagueName,
            'city' => $league->city,
            'province' => $league->province,
            'sport' => $league->sport,
            'type' => $league->type,
            'website' => $league->website,
            'person' => $league->person,
            'phone' => $league->phone,
            'email' => $league->email,
            'description' => $league->description
        );

        $notify_cred = array(
            'oldEmail' => $oldEmail,
            'oldName' => $oldName,
            'oldLeagueName' => $oldLeagueName
        );

        Mail::send('Emails.notifyUpdate', $notify_data, function($message) use ($notify_cred)
            {
              $message->to($notify_cred['oldEmail'], $notify_cred['oldName'] ?? $notify_cred['oldLeagueName'])
                      ->subject('Your league has been updated');
            });

        Session::flash('success', 'The request has been sent for approval.');

        return redirect()->action('PagesController@getIndex');
    }

    public function adminEdit($id)
    {
        $num = $this->getIdByTitle($id);
        $league = League::find($num);
        if ($league == null || !$league->validated)
        {
            Session::flash('error', 'The league does not exist.');
            return redirect('/');
        }

        return view('Admin.editLeague')->withLeague($league);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        League::destroy($id);
        Session::flash('success', 'The league was deleted.');
        return redirect()->action('PagesController@getIndex');
    }

    public function adminUpdate(Request $request, $id)
    {
        $league = League::find($id);
        if ($league == null || !$league->validated)
        {
            Session::flash('error', 'The league does not exist.');
            return redirect('/');
        }

        $this->validate($request, array(
               'leaguename' => 'required|max:250',
               'city' => 'required|max:50',
               'province' => 'required|max:50',
               'sport' => 'required|max:50',
               'type' => 'required',
               'website' => 'url|max:250',
               'person' => 'max:100',
               'phone' => 'max:20',
               'email' => 'required|email|max:100',
               'description' => 'max:250'
            ));

        $league->fill($request->all());
        if (isset($request->type))
        {
            $league->type = join(", ", $request->type);
        }
        $league->validated = 1;
        $league->authToken = $this->getRandomString(25);
        $league->save();

        Session::flash('success', 'League was successfully updated!');

        return redirect()->action('PagesController@getIndex');
    }

    public function filter($province, $sport, $type)
    {
        $leagues = League::select(array('Id', 'LeagueName', 'city', 'type'))->where(array('Province' => $province, 'Sport' => $sport, 'validated' => true))->where('Type', 'LIKE', '%'.$type.'%')->get();
        $data = array(
            'leagues' => $leagues,
            'province' => $province,
            'sport' => $sport,
            'type' => $type,
            'fromMain' => false);

        return view('Leagues.index')->withData($data);
    }

    public function getLeagues()
    {
        $params = Input::all();
        return redirect('leagues/filter/' . $params['province']. '/' . $params['sport'] . '/' . $params['type']);
    }

    public function confirmLeague($id, $authToken)
    {
        $league = League::find($id);
        if ($league == null || $league->authToken != $authToken || $league->validated)
        {
            Session::flash('error', 'The league does not exist.');
            return redirect('/');
        }

        $league->validated = true;
        $league->save();
        if (0 === strpos($authToken, 'new'))
        {
            $email_data = array(
                'url' => 'http://recreationalleagues.ca/leagues/' . urlencode($league->leaguename) . '-' . $league->id
            );

            Mail::send('Emails.leagueAccepted', $email_data, function($message) use ($league)
            {
                $message->to($league->email, $league->leaguename)
                    ->subject('Your league was accepted!');
            });
        }

        return redirect()->action('LeagueController@show', urlencode($league->leaguename) . '-' . $league->id);
    }

    public function denyLeague($id, $authToken)
    {
        $league = League::find($id);

        if ($league == null || $league->authToken != $authToken || $league->validated)
        {
            Session::flash('error', 'The league does not exist.');
            return redirect('/');
        }

        $league->delete();

        Session::flash('success', 'The league has been denied.');
        return redirect()->action('PagesController@getIndex');
    }

    public function adminAdd()
    {
        return view('Admin.create');
    }

    public function adminStore(Request $request)
    {
        $this->validate($request, array(
               'leagueName' => 'required|max:250',
               'city' => 'required|max:50',
               'province' => 'required|max:50',
               'sport' => 'required|max:50',
               'type' => 'required',
               'website' => 'max:250',
               'person' => 'max:100',
               'phone' => 'max:20',
               'email' => 'required|email|max:100',
               'description' => 'max:250'
            ));

        $league = new League;
        $league->leagueName = $request->leagueName;
        $league->city = $request->city;
        $league->province = $request->province;
        $league->sport = $request->sport;
        $league->type = join(", ", $request->type);
        $league->website = $request->website;
        $league->person = $request->person;
        $league->phone = $request->phone;
        $league->email = $request->email;
        $league->description = $request->description;
        $league->validated = 1;
        $league->authToken = $this->getRandomString(25);

        $league->save();

        Session::flash('success', 'The league has been added.');

        return redirect()->action('PagesController@getIndex');
    }

    public function replyToLeague(Request $request, $id)
    {
        $league = League::find($id);

        if ($league == null || !$league->validated)
        {
            Session::flash('error', 'The league does not exist.');
            return redirect('/');
        }

        $this->validate($request, array(
           'email' => 'required|max:50',
           'message' => 'required|max:250',
           'g-recaptcha-response' => 'required|captcha'
        ));

        $email_data = array(
            'email' => $request->email,
            'bodyMessage' => $request->message,
        );

        Mail::send('Emails.replyLeague', $email_data, function($message) use ($league)
        {
            $message->to($league->email, $league->leaguename)
                ->subject('You got a reply to your league!');
        });

        Session::flash('success', 'Your reply has been sent.');

        return redirect()->action('PagesController@getIndex');
    }
}
