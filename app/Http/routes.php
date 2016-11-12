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

Route::get('/','FrontPageController@index');
//Route::post('create','pageController@create');

//Quiz route start
# Quiz Management
Route::group(array('prefix' => 'quiz'), function () {
    //
//    Route::get('/', array('as' => 'quiz', 'uses' => 'QuizController@create'));
//    Route::get('index', array('as' => 'index', 'uses' => 'QuizController@index'));

});