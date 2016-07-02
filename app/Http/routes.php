<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('contact', 'PagesController@getContact');

Route::get('confirmation', 'PagesController@getConfirmation');

Route::get('FAQ', 'PagesController@getFAQ');

Route::get('leaguePage', 'PagesController@getLeaguePage');

Route::post('sendcontact', ['as' => 'pages.sendContact', 'uses' => 'PagesController@sendContact']);

Route::resource('leagues', "LeagueController");

Route::post('leagues/getLeagues', ['as' => 'leagues.getLeagues', 'uses' => 'LeagueController@getLeagues']);

Route::get('leagues/filter/{province}/{sport}/{type}', ['as' => 'leagues.filter', 'uses' => 'LeagueController@filter']);

Route::get('leagues/confirm/{id}/{authToken}', ['as' => 'leagues.confirm', 'uses' => 'LeagueController@confirmLeague']);

Route::get('leagues/deny/{id}/{authToken}', ['as' => 'leagues.deny', 'uses' => 'LeagueController@denyLeague']);

Route::get('/', 'PagesController@getIndex');