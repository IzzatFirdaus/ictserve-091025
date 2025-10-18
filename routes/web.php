<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

Route::view('/', 'welcome')->name('welcome');

// Public routes - no authentication required
Route::view('services', 'services')->name('services');
Route::view('contact', 'contact')->name('contact');
Route::view('accessibility', 'accessibility')->name('accessibility');

// Language switching route (WCAG 2.2 Success Criterion 3.1.2 - Language of Parts)
Route::get('locale/{locale}', function (string $locale) {
    if (! in_array($locale, ['en', 'ms'])) {
        abort(400);
    }

    Session::put('locale', $locale);
    App::setLocale($locale);

    return redirect()->back();
})->name('locale.switch');
