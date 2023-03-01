<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //On récupère toutes les données de la bdd
        $genres = Genre::all();
        $books = Book::paginate(8);

        //On retourne les valeurs à la vue Boutique

        return view('boutique', compact('books', 'genres'));
    }

 

    public function show($id)
    {
        //Affiche les détails de chaque livre ainsi que des livres aléatoires qui pourraient intéresser le client

        $counter = 0;
        $max_loops = 100;
        $books = Book::findOrFail($id);

        /*générateur aléatoire de livres*/

        $Alea = Book::inRandomOrder()->limit(3)->pluck('id')->toArray(); //Je veux que dans la colonne id, il me récupère les id, les mélange et en prenne que 3.

        while(in_array($id, $Alea) && $counter < $max_loops){
            $Alea = Book::inRandomOrder()->limit(3)->pluck('id')->toArray();
        }

        $booksAlea = Book::whereIn('id', $Alea)->get(); //Filtre qui me permettra de renvoyer unique les informations des 3 id qui seront sélectionnés aléatoirement dans $alea
        
        return view('livres',compact('books', 'booksAlea'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
