<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function carouselCard(){
        //Fonction qui va afficher 6 livres aléatoires

        $Alea = Book::inRandomOrder()->limit(5)->pluck('id')->toArray(); //Je veux que dans la colonne id, il me récupère les id, les mélange et en prenne que 6.
        $booksAlea = Book::whereIn('id', $Alea)->get(); //Filtre qui me permettra de renvoyer unique les informations des 6 id qui seront sélectionnés aléatoirement dans $alea

        return view('home', compact('booksAlea'));
    }
}
