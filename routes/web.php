<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AreasController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/areas', [AreasController::class, 'index']);
