<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ElectronicController;

// Full View harus di atas resource!
Route::get('/electronics/fullview', [ElectronicController::class, 'fullView'])
    ->name('electronics.fullview');

Route::resource('electronics', ElectronicController::class);

// Optional: homepage ke index
Route::get('/', [ElectronicController::class, 'index']);
