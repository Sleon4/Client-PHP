<?php

use LionRoute\Route;

use App\Http\Controllers\HomeController;

/**
 * ------------------------------------------------------------------------------
 * Web Routes
 * ------------------------------------------------------------------------------
 * Here is where you can register web routes for your application
 * ------------------------------------------------------------------------------
 **/

Route::get('/', [HomeController::class, 'index']);

Route::post('new-text', fn() => response->success(request->text));