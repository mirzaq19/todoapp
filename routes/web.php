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

Route::get('/','TaskController@index')->name('index');
Route::post('/','TaskController@store')->name('store');
Route::get('/{task}/edit','TaskController@edit')->name('edit');
Route::put('/{task}','TaskController@update')->name('update');
Route::delete('/{task}','TaskController@destroy')->name('delete');

