<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReadabilityController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/categories', [CategoriesController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/readability', [ReadabilityController::class, 'index']);
