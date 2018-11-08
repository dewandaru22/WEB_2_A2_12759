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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contoh/halamandua', 'Contoh@halamandua');
Route::get('/contoh/halamantiga', 'Contoh@halamantiga');
Route::resource('contoh', 'Contoh');

Route::resource('mahasiswa','Mahasiswa');
Route::resource('user','User');

Route::get('/home', 'Member@index');
Route::get('/login', 'Member@login');
Route::post('/loginPost', 'Member@loginPost');
Route::get('/register', 'Member@register');
Route::post('/registerPost', 'Member@registerPost');
Route::get('/logout', 'Member@logout');