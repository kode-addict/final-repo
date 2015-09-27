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

/*
|--------------------------------------------------------------------------
| Auth Routes
|--------------------------------------------------------------------------
|
*/
Route::get('login', function () 
{
    return redirect('auth/login');
});
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('logout', function ()
{
    
    return redirect('auth/logout');
});

Route::get('auth/logout', 'Auth\AuthController@getLogout');

Route::get('register', function ()
{
    return redirect('auth/register');
});
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

$router->group([
        'namespace' => 'Auth',
        'middleware' => 'auth',
    ], function () {
      	get('/', function(){
      	return "Welcome MaePaySoh";
      });
    });


/*
|--------------------------------------------------------------------------
| Facebook User Route
|--------------------------------------------------------------------------
|
*/
Route::get('auth/login_with_fb', 'Auth\AuthController@redirectToProvider');
Route::get('auth/callback', 'Auth\AuthController@handleProviderCallback');

/*
|--------------------------------------------------------------------------
| Working State Routes.
|--------------------------------------------------------------------------
|
*/

$router->get('candidate/search', 'CandidateController@candidateSearchName');

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

$router->get('candidate/searchajax/{name}', 'CandidateController@candidateSearch');


$router->get('candidate/compare/{p1}/{p2}', 'CandidateController@compare');

$router->get('candidatelist/search', 'CandidateController@candidateListSearch');

Route::get('howto', function(){
	return view('howto');
});