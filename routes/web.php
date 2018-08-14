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



Route::group(['middleware' => 'web'], function() {
    // Place all your web routes here...(Cut all `Route` which are define in `Route file`, paste here)
    Route::get('/', function () {
        return view('pages.dashboard');
    });
    Route::get('/user', function () {
        return view('user','UserController@index');
    });
    Route::resource('user','UserController');

    Route::resource('kendaraan','KendaraanController');
});
