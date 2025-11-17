<?php

namespace App\Http\Controllers;
use App\Models\Voiture;

use Illuminate\Http\Request;

class VoitureController extends Controller
{
    public function AfficherVoiture() {
        return view('voiture');
    }

    public function index() {
        $voitures = Voiture::all();
        return view('voiture.index', compact('voitures'));
    }

    public function show($id) {
        $voiture = Voiture::findOrFail($id);
        return view('voiture.show', compact('voiture'));
    }

    public function destroy($id) {
        $voiture = Voiture::findOrFail($id);
        $voiture->delete();
        return redirect()->route('voiture.index')->with("success", "article supprimé");
    }
}
