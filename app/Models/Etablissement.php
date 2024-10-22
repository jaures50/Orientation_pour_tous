<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etablissement extends Model
{
    use HasFactory;

    // Définir les champs que tu veux mass-assign
    protected $fillable = [
        'nom',
        'type',
        'adresse',
        'ville',
        'pays',
        'image', // Nouveau champ pour l'image
    ];
}
