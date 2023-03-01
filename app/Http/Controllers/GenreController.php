<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
        
    }
 
    public function showByGenre($id)
    {
        $genres = Genre::all();
        $genre = Genre::find($id);
        $books = $genre->books()->simplePaginate(8);
        
        return view('boutique', compact('books','genre', 'genres'));
    }


  


}
