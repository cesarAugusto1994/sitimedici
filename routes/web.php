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

Route::get('/', 'HomeController@index')->name('home');

Route::get('/nossa-historia', 'HomeController@nossaHistoria')->name('nossa_historia');
Route::get('/diretoria', 'HomeController@diretoria')->name('diretoria');
Route::get('/fale-conosco', 'HomeController@faleConosco')->name('fale_conosco');

Auth::routes();

Route::prefix('admin')->group(function () {
    Route::get('/', 'AdminController@index')->name('home_admin');
    Route::get('/paginas', 'PaginasController@index')->name('admin_paginas');

    Route::get('/noticias', 'NoticiasController@index')->name('noticias');
    Route::get('/noticias/form/create', 'NoticiasController@create')->name('noticia_create');
    Route::post('/noticias/store', 'NoticiasController@store')->name('noticia_store');

    Route::get('/noticia/{id}', 'NoticiasController@show')->name('noticia');
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
