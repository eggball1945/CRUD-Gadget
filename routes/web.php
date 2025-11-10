<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ElectronicController;


Route::get('/', [ElectronicController::class, 'index']);
Route::resource('electronics', ElectronicController::class);