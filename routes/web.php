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
Route::get('/noticia/{id}', 'NoticiasController@exibir')->name('noticia_exibir');

Auth::routes();

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/', 'AdminController@index')->name('home_admin');
    Route::get('/paginas', 'PaginasController@index')->name('admin_paginas');

    Route::get('/noticias', 'NoticiasController@index')->name('noticias');
    Route::get('/noticias/form/create', 'NoticiasController@create')->name('noticia_create');
    Route::post('/noticias/store', 'NoticiasController@store')->name('noticia_store');

    Route::get('/noticia/{id}', 'NoticiasController@show')->name('noticia');

    #Route::resource('banners', 'BannerController');

    Route::get('/banners', 'BannerController@index')->name('banners');
    Route::get('/banners/{id}/edit', 'BannerController@edit')->name('banner_edit');
    Route::get('/banners/form/create', 'BannerController@create')->name('banner_create');
    Route::post('/banners/store', 'BannerController@store')->name('banner_store');
    Route::get('/banners/{id}/destroy', 'BannerController@destroy')->name('banner_destroy');
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
