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
 Auth::loginUsingId(1);

Route::resource('/','MainController');

$router->get('test','CandidateController@index');

Route::get('geo/lowerhouse','GeoController@lowerHouse');

Route::get('geo/upperhouse','GeoController@upperHouse');

Route::resource('candidate','CandidateController');

Route::resource('party','PartyController');

Route::resource('faq','FaqController');

Route::resource('geo','GeoController');

Route::post('favorite','FavoriteController@store');

Route::post('like','LikeController@store');

Route::post('favoriteparty','FavoritePartyController@store');

Route::post('likeparty','LikePartyController@store');

Route::get('user/favorites','UserController@getFavoriteList');

Route::resource('party.candidate', 'PartyCandidateController');

$router->get('candidate/search/{name}', 'CandidateController@candidateSearch');

$router->get('candidate/compare/{p1}/{p2}', 'CandidateController@compare');

$router->get('candidatelist/search', 'CandidateController@candidateListSearch');