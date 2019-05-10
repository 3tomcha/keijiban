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

Route::resource('rooms','RoomController')->only([
  'store','create','show'
]);

Route::post('rooms/{id}/board/login', 'BoardController@index');
Route::post('rooms/{id}/board/', 'BoardController@store');

Auth::routes();
