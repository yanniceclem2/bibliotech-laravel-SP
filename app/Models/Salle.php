<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salle extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'etage',
        'capacite',
        'type',
        'disponible',
    ];

    protected $casts = [
        'disponible' => 'boolean',
        'etage' => 'integer',
        'capacite' => 'integer',
    ];
}
