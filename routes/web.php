<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PriceCalculatorController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');
Route::resource('contact', ContactController::class);
Route::resource('news', NewsController::class);
Route::resource('price_calculator', PriceCalculatorController::class);
Route::resource('services', ServicesController::class);
Route::resource('about', AboutController::class);
