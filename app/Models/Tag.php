<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function voitures()
    {
        return $this->belongsToMany(Voiture::class, 'tag_voiture', 'voiture_id', 'tag_id',);
    }
}
