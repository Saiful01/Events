<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $result=\App\Event::get();
    return view('welcome')->with('result',$result);
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/pages/details/{id}', 'Controller@detail');
Route::get('/pages/reg/{id}', 'Controller@reg');


//admin section event
Route::get('/event/create', 'EventController@create');
Route::post('/event/store', 'EventController@store');
Route::get('/event/view', 'EventController@show');
Route::get('/event/edit/{id}', 'EventController@edit');
Route::post('/event/update', 'EventController@update');
Route::get('/event/delete/{id}', 'EventController@destroy');
Route::get('/event/participant/{id}', 'EventController@participant');


//admin section participant
Route::get('/participant/create', 'ParticipantController@create');
Route::post('/participant/store', 'ParticipantController@store');
Route::get('/participant/view', 'ParticipantController@show');
Route::get('/participant/edit/{id}', 'ParticipantController@edit');
Route::post('/participant/update', 'ParticipantController@update');
Route::get('/participant/delete/{id}', 'ParticipantController@destroy');


//admin section Event Registered
Route::get('/EventReg/view', 'EventRegController@show');

