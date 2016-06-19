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

Route::get('links', 'PagesController@getLinks');

Route::get('FAQ', 'PagesController@getFAQ');

Route::get('leaguePage', 'PagesController@getLeaguePage');

Route::get('/', 'PagesController@getIndex');

Route::resource('leagues', "LeagueController");