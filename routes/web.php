<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Voiture;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/voiture', [Voiture::class, 'AfficherVoiture']);
