<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auteur extends Model
{
    use HasFactory;

    protected $table = 'auteurs';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nom',
        'biographie',
    ];


    /**
     * Cette fonction montre qu'un Auteur détient plusieurs livres.
     */

     public function oeuvres(){
        $this->hasMany(Book::class, "auteur_id");
     }
}
