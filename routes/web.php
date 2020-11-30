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



Route::get('/', 'HomeController@index');
Route::get('/layouts', 'HomeController@layout')->name('dashboard');
Route::get('/users', 'HomeController@users')->name('users');

Route::resource('kelas', 'KelasController');
Route::resource('Siswa', 'SiswaController');
Route::resource('Extra', 'ExtraController');
Route::resource('List', 'ListExtraSiswaController');
