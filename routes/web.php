<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NinController;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/nin/verify', [NinController::class, 'showForm'])->name('nin.form');
Route::post('/nin/verify', [NinController::class, 'verify'])->name('nin.verify');
Route::get('/nin/history', [NinController::class, 'history'])->name('nin.history');