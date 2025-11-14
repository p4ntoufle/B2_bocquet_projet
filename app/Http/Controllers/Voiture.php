<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Voiture extends Controller
{
    public function AfficherVoiture() {
        return view('AfficherVoiture');
    }

    public function index() {
        $voiture = Voiture::all();
        return view('voiture.index', compact('voiture'));
    }
}
