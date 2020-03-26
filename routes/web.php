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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('admin/profile', 'ProfileController@index');

Route::get('/server','ServerController@index');
Route::get('/server/create','ServerController@create');
Route::post('/server/store','ServerController@store');
Route::get('/server/edit/{id}','ServerController@edit');
Route::post('/server/update','ServerController@update');
Route::get('/server/hapus/{id}','ServerController@destroy');