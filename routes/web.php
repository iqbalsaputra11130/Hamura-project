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

Route::get('/','HomeController@index');

Route::get('/login','AuthController@login')->name('login');
Route::post('/postlogin','AuthController@postlogin');
Route::get('/logout','AuthController@logout');

Route::group(['middleware' => 'auth'] ,function(){
    Route::get('/hamura','HamuraController@index');
    Route::post('/hamura/create','HamuraController@create');
    Route::get('/hamura/{id}/edit','HamuraController@edit');
    Route::post('/hamura/{id}/update','HamuraController@update');
    Route::get('/hamura/{id}/delete','HamuraController@delete');
});