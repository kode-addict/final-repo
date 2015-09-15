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

Route::get('/', function () {
    return view('welcome');
});


$router->get('test','CandidateController@index');

Route::resource('candidate','CandidateController');

Route::resource('party','PartyController');

Route::resource('faq','FaqController');

$router->get('candidate/search/{name}', 'CandidateController@candidateSearch');

$router->get('candidatelist/search', 'CandidateController@candidateListSearch');