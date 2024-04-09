<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuroraController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/aurora', [AuroraController::class, 'index']);
