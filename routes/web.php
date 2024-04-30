<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/', [homeController::class, 'index']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('layout75.index');
    })->name('dashboard');
});
