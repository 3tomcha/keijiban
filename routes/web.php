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
    return view('index');
});

Route::get('rooms/', function () {
    return view('room');
});

Route::get('/rooms/create', function () {
    return view('create');
});

Route::post('rooms/', 'RoomController@store');
Route::get('rooms/{id}', 'RoomController@show');


Route::get('/rooms/1', function () {
    return view('show');
})->middleware('auth.basic');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
