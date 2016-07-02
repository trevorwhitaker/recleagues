<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\League;

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
        $leagues = League::select(array('Id', 'LeagueName'))->where('validated', true)->get();

        return view('Leagues.index')->withLeagues($leagues);
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

    public function getRandomString($length) {
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
               'city' => 'required|max:50',
               'province' => 'required|max:50',
               'sport' => 'required|max:50',
               'type' => 'required|max:10',
               'website' => 'url|max:250',
               'person' => 'required|max:100',
               'phone' => 'required|max:20',
               'email' => 'required|email|max:100',
               'description' => 'max:250',
               'g-recaptcha-response' => 'required|captcha'
            ));

        $league = new League;
        $league->leagueName = $request->leagueName;
        $league->city = $request->city;
        $league->province = $request->province;
        $league->sport = $request->sport;
        $league->type = $request->type;
        $league->website = $request->website;
        $league->person = $request->person;
        $league->phone = $request->phone;
        $league->email = $request->email;
        $league->description = $request->description;
        $league->authToken = $this->getRandomString(25);

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

        Mail::send('emails.request', $email_data, function($message) use ($league)
            {
              $message->to('trevor.whitaker@hotmail.com', 'Trevor Whitaker')
                      ->subject('League request from '. $league->person);
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
        $league = League::find($id);
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //...
    }

    public function filter($province, $sport, $type)
    {
        $leagues = League::select(array('Id', 'LeagueName'))->where(array('Province' => $province, 'Sport' => $sport, 'Type' => $type, 'validated' => true))->get();

        return view('Leagues.index')->withLeagues($leagues);
    }

    public function getLeagues()
    {
        $params = Input::all();
        return redirect('leagues/filter/' . $params['province']. '/' . $params['sport'] . '/' . $params['type']);
    }

    public function confirmLeague($id, $authToken)
    {
        $league = League::find($id);

        if ($league == null || $league->authtoken != $authToken || $league->validated)
        {
            Session::flash('error', 'The league does not exist.');
            return redirect('/');
        }

        $league->validated = true;
        $league->save();

        Session::flash('success', 'The league has been added.');
        return redirect('/');
    }

    public function denyLeague($id, $authToken)
    {
        $league = League::find($id);

        if ($league == null || $league->authtoken != $authToken || $league->validated)
        {
            Session::flash('error', 'The league does not exist.');
            return redirect('/');
        }

        $league->delete();

        Session::flash('success', 'The league has been denied.');
        return redirect('/');
    }
}
