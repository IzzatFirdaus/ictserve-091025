<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

// Public routes - no authentication required
Route::view('services', 'services')->name('services');
Route::view('contact', 'contact')->name('contact');
