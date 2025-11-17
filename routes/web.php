<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VoitureController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/', [VoitureController::class, 'AfficherVoiture']);
Route::get('/voiture', [VoitureController::class, 'index']);

Route::get('/voitures/{id}', [VoitureController::class, 'show'])->name('voiture.show');
