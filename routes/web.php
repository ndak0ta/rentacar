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

Route::view('admin', 'admin.admin');

//Route::get('admin/ofisler', 'OfisController@index');
//Route::get('admin/ofisler/ekle', 'OfisController@create');
//Route::post('admin/ofisler/ekle', 'OfisController@store');
//Route::get('admin/ofisler/{ofis}', 'OfisController@show');
//Route::get('admin/ofisler/{ofis}/duzenle', 'OfisController@edit');
//Route::patch('admin/ofisler/{ofis}', 'OfisController@update');
//Route::delete('admin/ofisler/{ofis}', 'OfisController@destroy');

Route::resource('admin/ofis', 'OfisController');
