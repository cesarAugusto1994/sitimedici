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
Route::get('/noticia/{id}/{titulo}', 'NoticiasController@exibir')->name('noticia_exibir');
Route::get('/pagina/{id}/{titulo}', 'PaginasController@exibir')->name('pagina_exibir');
Route::get('/evento/{id}/{titulo}', 'EventosController@exibir')->name('evento_exibir');
Route::get('/pesquisa', 'HomeController@pesquisar')->name('pesquisar');

Route::get('/videos', 'VideosController@videosIndex')->name('videos_index');
Route::get('/galeria-fotos', 'GaleriaController@galeriaIndex')->name('galeria_fotos_index');
Route::get('/noticias', 'NoticiasController@noticiasIndex')->name('noticias_index');
Route::get('/sindicalize-se', 'SindicalizarController@sindicalize')->name('sindicalize');
Route::post('/sindicalize-se/store', 'SindicalizarController@store')->name('sindicalize_store');

Route::post('/fale-conosco/store', 'FaleConoscoController@store')->name('fale_conosco_store');

Auth::routes();

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/', 'AdminController@index')->name('home_admin');
    Route::get('/paginas', 'PaginasController@index')->name('admin_paginas');

    Route::get('/noticias', 'NoticiasController@index')->name('noticias');
    Route::get('/noticias/form/create', 'NoticiasController@create')->name('noticia_create');
    Route::post('/noticias/store', 'NoticiasController@store')->name('noticia_store');
    Route::post('/noticias/{id}/update', 'NoticiasController@update')->name('noticia_update');
    Route::get('/noticia/{id}', 'NoticiasController@show')->name('noticia');
    Route::get('/noticia/{id}/destroy', 'NoticiasController@destroy')->name('noticia_destroy');

    Route::get('/paginas', 'PaginasController@index')->name('paginas');
    Route::get('/paginas/form/create', 'PaginasController@create')->name('pagina_create');
    Route::post('/paginas/store', 'PaginasController@store')->name('pagina_store');
    Route::get('/paginas/{id}/edit', 'PaginasController@edit')->name('pagina_edit');
    Route::post('/paginas/{id}/update', 'PaginasController@update')->name('pagina_update');
    Route::get('/paginas/{id}', 'PaginasController@show')->name('pagina');

    Route::get('/banners', 'BannerController@index')->name('banners');
    Route::get('/banners/{id}/edit', 'BannerController@edit')->name('banner_edit');
    Route::get('/banners/form/create', 'BannerController@create')->name('banner_create');
    Route::post('/banners/store', 'BannerController@store')->name('banner_store');
    Route::get('/banners/{id}/destroy', 'BannerController@destroy')->name('banner_destroy');

    Route::get('/servicos', 'ServicosController@index')->name('servicos');
    Route::get('/servicos/form/create', 'ServicosController@create')->name('servico_create');
    Route::post('/servicos/store', 'ServicosController@store')->name('servico_store');
    Route::get('/servicos/{id}/edit', 'ServicosController@edit')->name('servico_edit');
    Route::post('/servicos/{id}/update', 'ServicosController@update')->name('servico_update');
    Route::get('/servicos/{id}', 'ServicosController@show')->name('servico');

    Route::get('/eventos', 'EventosController@index')->name('eventos');
    Route::get('/evento/form/create', 'EventosController@create')->name('evento_create');
    Route::post('/evento/store', 'EventosController@store')->name('evento_store');
    Route::get('/evento/{id}/edit', 'EventosController@edit')->name('evento_edit');
    Route::post('/evento/{id}/update', 'EventosController@update')->name('evento_update');
    Route::get('/evento/{id}', 'EventosController@show')->name('evento');
    Route::get('/evento/{id}/destroy', 'EventosController@destroy')->name('evento_destroy');

    Route::get('/videos', 'VideosController@index')->name('videos');
    Route::get('/video/form/create', 'VideosController@create')->name('video_create');
    Route::post('/video/store', 'VideosController@store')->name('video_store');
    Route::get('/video/{id}/edit', 'VideosController@edit')->name('video_edit');
    Route::post('/video/{id}/update', 'VideosController@update')->name('video_update');
    Route::get('/video/{id}', 'VideosController@show')->name('video');
    Route::get('/video/{id}/destroy', 'VideosController@destroy')->name('video_destroy');

    Route::get('/galeria', 'GaleriaController@index')->name('galeria');
    Route::get('/galeria/form/create', 'GaleriaController@create')->name('galeria_create');
    Route::post('/galeria/store', 'GaleriaController@store')->name('galeria_store');
    Route::get('/galeria/{id}/edit', 'GaleriaController@edit')->name('galeria_edit');
    Route::post('/galeria/{id}/update', 'GaleriaController@update')->name('galeria_update');
    Route::get('/galeria/{id}', 'GaleriaController@show')->name('galeria_item');
    Route::get('/galeria/{id}/destroy', 'GaleriaController@destroy')->name('galeria_destroy');

    Route::get('/configuracoes', 'ConfiguracoesController@index')->name('config');
    Route::post('/configuracoes/{id}/update', 'ConfiguracoesController@update')->name('config_update');

    Route::get('/fale-conosco', 'FaleConoscoController@index')->name('fale_conosco_index');
    Route::get('/sindicalize-se', 'SindicalizarController@index')->name('sindicalize_index');
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
