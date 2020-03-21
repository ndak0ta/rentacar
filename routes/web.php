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

Route::view('/', 'home');
Route::get('ofisler', 'OfisController@index');
Route::get('arabalar', 'ArabaController@index');

Route::view('admin', 'admin.admin');

//Route::get('admin/ofis', 'OfisController@index');
//Route::get('admin/ofis/create', 'OfisController@create');
//Route::post('admin/ofis/create', 'OfisController@store');
//Route::get('admin/ofis/{ofis}', 'OfisController@show');
//Route::get('admin/ofis/{ofis}/edit', 'OfisController@edit');
//Route::patch('admin/ofis/{ofis}', 'OfisController@update');
//Route::delete('admin/ofis/{ofis}', 'OfisController@destroy');

Route::resource('admin/ofis', 'OfisController')->parameters(['ofis' => 'ofis']);// parametre kısmı api otomarik olarak {ofis} değişkeinin 's' harfini sildiği için tanımlandı
Route::resource('admin/araba', 'ArabaController');
