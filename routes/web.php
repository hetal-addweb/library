<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/files/create','LibraryController@create');
Route::post('/files','LibraryController@store');
Route::get('/files','LibraryController@index');
Route::get('/files/{id}','LibraryController@show');

Route::get('/file/download/{file}','LibraryController@download');
