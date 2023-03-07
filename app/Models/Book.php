<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $table = 'books';
    protected $primaryKey = 'id';
    protected $fillable = [
        'image',
        'titre',
        'auteur_id',
        'resume',
        'prix',
        'genre_id',
    ];

    /**
     * Cette fonction montre que ce modèle appartient au model Genre.
     */
        public function genre()
    {
        return $this->belongsTo(Genre::class);
    }

    /**
     * Cette fonction montre que ce modèle appartient au model Auteur.
     */
    public function auteur(){
        return $this->belongsTo(Auteur::class);
    }
}
