<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Livre extends Model
{
    use HasFactory;
    protected $fillable = [
        'titre',
        'date_de_publication',
        'isbn',
        'auteur',
        'editeur',
        'categorie',
        'rayon',
        'disponibilite'
    ];
    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }

    public function rayon()
    {
        return $this->belongsTo(Rayon::class);
    }
}
