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

Route::get('/', 'RoomController@index');
Route::get('/search', 'SearchController');

Route::get('rooms/', function () {
    return view('room');
});

Route::get('/rooms/create', function () {
    return view('create');
});

Route::post('rooms/', 'RoomController@store');
Route::get('rooms/{id}', 'RoomController@show');
Route::post('rooms/{id}/board/login', 'BoardController@index');
Route::post('rooms/{id}/board/', 'BoardController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
