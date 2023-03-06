<?php

namespace App\Models;

use App\Models\Book;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Auteur extends Model
{
    use HasFactory;

    protected $table = 'auteurs';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nom',
        'biographie',
    ];

     public function oeuvres(){
       return $this->hasMany(Book::class, "auteur_id");
     }
}
