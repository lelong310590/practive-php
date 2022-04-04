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

Route::get('/', function () 
{
    return view('welcome');
});

Route::get('login','AdminController@getLogin')->name('login.get');
Route::post('login','AdminController@postLogin')->name('login.post');
Route::get('dashboard','AdminController@getDashboard')->name('dashboard.get');
Route::get('logout','AdminController@getLogout')->name('logout.get');


