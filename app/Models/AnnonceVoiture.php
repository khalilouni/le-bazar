<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnnonceVoiture extends Model
{
    use HasFactory;

    protected $fillable = ['kilometrage', 'couleur', 'transmission', 'puissance_moteur', 'cylindre', 'annee_construction', 'modeleId', 'carrosserieId', 'annonceId'];
}
