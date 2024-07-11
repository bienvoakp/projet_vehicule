<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voiture extends Model
{
    use HasFactory;
    protected $fillable = ['nom',
    'prix',
    'marque',
    'date_achat',
    'annee_fabrication',
    'categorie_id',
];
    public function categorie(){
        return $this->belongsTo(Categorie::class, 'categorie_id');
    }
}
