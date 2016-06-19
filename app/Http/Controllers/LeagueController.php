<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\League;

class LeagueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
               'website' => 'max:250',
               'person' => 'required|max:100',
               'phone' => 'required|max:20',
               'email' => 'required|email|max:100',
               'description' => 'max:250'
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

        $league->save();

        // send email here to validate with id field. Store the object and set flag to false. Change when link is clicked.

        return redirect()->action('PagesController@getConfirmation');
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
        //
    }
}
