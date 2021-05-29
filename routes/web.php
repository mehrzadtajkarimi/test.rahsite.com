<?php

use App\Core\Routing\Route;
use App\Middleware\Gate;


/**
 * add middleware example =
 * Route::get('/','HomeController@index',[Gate::class]);
 */




Route::get('/','HomeController@index');