<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voiture extends Model
{
    use HasFactory;
    // protected fillable sert à protéger les variables

    protected $fillable = ['matricule',
    'prix',
    'marque',
    'date_achat',
    'annee_fabrication',
    'categorie_id',
    'image', // image principale de la voiture
    'gallerie' // les autres images de la même voiture
];
    public function categorie(){
        return $this->belongsTo(Categorie::class);
    }

    public function getGallerieAttribute($value)
    {
        return json_decode($value) ?? [];
    }

    public function setGallerieAttribute($value)
    {
        $this->attributes['gallerie'] = json_encode($value);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'tag_voiture', 'voiture_id', 'tag_id');
    }

}
