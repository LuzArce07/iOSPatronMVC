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



Route::get('/', 'NoticiaController@index')->name('front.noticias.index');

Route::get('/noticias/{id}', 'NoticiaController@show')->name('front.noticias.show'); //{} ahi va los elementos que queremos que sean dinamicos

Route::get('/admin', 'AdminController@dashboard')->name('admin.dashboard');

//Atajo para establecer las 7 rutas básicas de un recurso
//Index, show, create, store, edit, update, destroy
Route::resource('/admin/noticias', 'Admin\NoticiaController');

Auth::routes(['register' => false]);


//Route::get('/home', 'HomeController@index')->name('home');
