<?php

use App\Core\Routing\Route;
use App\Middleware\Gate;


/**
 * add middleware example =
 * Route::get('/','exampleController@index',[Gate::class]);
 *
 * add slug example =
 * Route::get('/example/{slug}','exampleController@index');
 * Route::get('/example/{slug}/example2/{id}','exampleController@index');
 */





Route::get('/post/{ddd}/ss/{id}','HomeController@index');
Route::get('/','HomeController@index');

Route::get('/archive','ArchiveController@index');
Route::post('/archive/{id}','ArchiveController@single');

Route::get('/Portfolio','PortfolioController@index');
Route::post('/Portfolio/{id}','PortfolioController@single');

Route::get('/article','ArticleController@index');