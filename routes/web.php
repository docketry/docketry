<?php

use Illuminate\Support\Facades\Route;

/**
 * Docketry Routes
 */
Route::prefix('docketry')->group(function () {
    // Welcome page.
    Route::get('/', function () {
        return view('docketry::welcome');
    });
});