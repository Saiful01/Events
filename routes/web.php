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

use Illuminate\Support\Facades\App;

Route::get('/', function () {
    $result = \App\Event::get();
    return view('pages.home')->with('result', $result);
});


Auth::routes();

//Login start Here

Route::get('/admin/login', 'LoginController@login');
Route::post('/admin/login/check', 'LoginController@loginCheck');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin/logout', 'LoginController@logout');
//Login end Here


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
Route::get('/participant/view/{id}', 'ParticipantController@show');
Route::get('/participant/edit/{id}', 'ParticipantController@edit');
Route::post('/participant/update', 'ParticipantController@update');


//admin section Event Registered
Route::get('/EventReg/view', 'EventRegController@show');


Route::get('/test', function () {

    return view('pages.ticket2');

    $pdf = PDF::loadView('ticket.ticket');
    return $pdf->download('invoice.pdf');


    /*

        $pdf->loadHTML('<h1>Test</h1>');
        return $pdf->stream();*/
});

