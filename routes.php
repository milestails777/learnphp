<?php

use App\Controllers\PostController;
use App\Controllers\PublicController;
use App\Route;

Route::get('/', [PublicController::class, 'index']);

Route::get('/us', [PublicController::class, 'us']);

Route::get('/tech', [PublicController::class, 'tech']);

Route::post('/forms', [PublicController::class, 'forms']);
Route::post('/forms', [PublicController::class, 'answer']);

Route::get('/admin/forms', [PostController::class, 'index']);