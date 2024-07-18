<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;

Route::get('/all', [ClientController::class, 'index']);
Route::post('/store', [ClientController::class, 'store']);
Route::post('/edit/{id}', [ClientController::class, 'edit'])->where('id', '[0-9]+');
Route::get('/show/{id}', [ClientController::class, 'show'])->where('id', '[0-9]+');
Route::post('/destroy/{id}', [ClientController::class, 'destroy'])->where('id', '[0-9]+');
