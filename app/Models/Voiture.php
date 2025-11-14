<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voiture extends Model
{
    Use HasFactory;
    protected $fillable = ['modele', 'marque', 'plaque', 'kilometrage'];
}
