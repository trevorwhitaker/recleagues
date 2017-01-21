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

Route::get('api/getcities/{query}', ['as' => 'cities.get', 'uses' => 'CityController@getCities']);


// League standard routes
Route::get('leagues', ['as' => 'leagues.index', 'uses' => 'LeagueController@index']);

Route::post('leagues', ['as' => 'leagues.store', 'uses' => 'LeagueController@store']);

Route::post('leaguesreply/{id}', ['as' => 'leagues.reply', 'uses' => 'LeagueController@replyToLeague']);

Route::get('leagues/create', ['as' => 'leagues.create', 'uses' => 'LeagueController@create']);

Route::post('leagues/getLeagues', ['as' => 'leagues.getLeagues', 'uses' => 'LeagueController@getLeagues']);

Route::get('leagues/filter/{province}/{sport}/{type}', ['as' => 'leagues.filter', 'uses' => 'LeagueController@filter']);

Route::get('leagues/adminadd', ['as' => 'leagues.adminAdd', 'uses' => 'LeagueController@adminAdd'])->middleware('auth.basic');

Route::post('leagues/adminadd', ['as' => 'leagues.adminStore', 'uses' => 'LeagueController@adminStore'])->middleware('auth.basic');

Route::get('leagues/{league}/adminedit', ['as' => 'leagues.adminEdit', 'uses' => 'LeagueController@adminEdit'])->middleware('auth.basic');

Route::post('leagues/{leagues}', ['as' => 'leagues.update', 'uses' => 'LeagueController@update']);

Route::get('leagues/{leagues}', ['as' => 'leagues.show', 'uses' => 'LeagueController@show']);

Route::get('leagues/{leagues}/edit', ['as' => 'leagues.edit', 'uses' => 'LeagueController@edit']);

Route::delete('leagues/{leagues}', ['as' => 'leagues.destroy', 'uses' => 'LeagueController@destroy'])->middleware('auth.basic');

Route::get('leagues/{leagues}/admin', ['as' => 'leagues.adminEdit', 'uses' => 'LeagueController@adminEdit'])->middleware('auth.basic');

Route::post('leagues/{leagues}/admin', ['as' => 'leagues.adminUpdate', 'uses' => 'LeagueController@adminUpdate'])->middleware('auth.basic');

Route::get('leagues/confirm/{id}/{authToken}', ['as' => 'leagues.confirm', 'uses' => 'LeagueController@confirmLeague']);

Route::get('leagues/deny/{id}/{authToken}', ['as' => 'leagues.deny', 'uses' => 'LeagueController@denyLeague']);

// Message standard routes
Route::get('bulletinboard', ['as' => 'comments.index', 'uses' => 'CommentController@index']);

Route::get('bulletinboard/create', ['as' => 'comments.create', 'uses' => 'CommentController@create']);

Route::get('bulletinboard/confirm/{id}/{authToken}', ['as' => 'comments.confirm', 'uses' => 'CommentController@confirmMessage']);

Route::get('bulletinboard/deny/{id}/{authToken}', ['as' => 'comments.deny', 'uses' => 'CommentController@denyMessage']);

Route::post('bulletinboard', ['as' => 'comments.store', 'uses' => 'CommentController@store']);

Route::post('bulletinboard/reply', ['as' => 'comments.reply', 'uses' => 'CommentController@reply']);

Route::post('bulletinboard/getLeagues', ['as' => 'comments.getMessages', 'uses' => 'CommentController@getMessages']);

Route::delete('bulletinboard/{id}', ['as' => 'comments.delete', 'uses' => 'CommentController@destroy'])->middleware('auth.basic');

Route::get('bulletinboard/{id}/edit', ['as' => 'comments.edit', 'uses' => 'CommentController@edit']);

Route::post('bulletinboard/{id}/edit', ['as' => 'comments.update', 'uses' => 'CommentController@update']);

Route::get('bulletinboard/filter/{province}/{sport}', ['as' => 'comments.filter', 'uses' => 'CommentController@filter']);

Route::get('bulletinboard/adminedit', ['as' => 'comments.admin', 'uses' => 'CommentController@getAdminPage'])->middleware('auth.basic');






Route::get('/', 'PagesController@getIndex');