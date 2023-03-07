<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Genre;
use App\Models\Auteur;
use Illuminate\Http\Request;

class DashboardBookController extends Controller
{
    public function index()
    {   
        //Affiche tous les livres
        $books = Book::paginate(10);
        return view('admin.dashboard_livres' , compact('books'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Redirige sur le formulaire de création du livre
        $books = Book::all();
        $auteur = Auteur::all();
        $genre = Genre::all();
        return view('admin.new_livre', compact('books', 'genre', 'auteur'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Créer un nouveau livre

        
        $request->validate([
            'image' => 'required',
            'titre' => 'required|max:220',
            'resume'  => 'required',
            'prix'  => 'required'
        ]);     


        $fichierLP = $request->file('image');
        $fileNameLP = "" ;
        if ($request->hasfile('image')) {
            $extensionLP = $fichierLP->getClientOriginalName();
            $fileNameLP = 'image/livres/' . time() . '_' . $extensionLP;
            $fichierLP->move(public_path('image/livres/'), $fileNameLP);
        }

         Book::create([
            'image' => $fileNameLP,
            'titre' => $request->titre,
            'auteur_id'  => $request->auteur,
            'resume'  => $request->resume,
            'prix'  => $request->prix,
            'genre_id'  => $request->genre
        ]);

        return redirect()->route('table_livre')->with('success', "Le livre a été crée avec succès"); //Il me redirige sur le dashboard quand c'est terminé.
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $books = Book::find($id);
        $auteur = Auteur::all();
        $genre = Genre::all();
        return view('admin.edit_livre', compact('books', 'genre', 'auteur'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //On récupère l'id de la catégorie via la requête envoyée par le formulaire
        $books= Book::find($request->id);

        //Enregister la photo
        $fichierLP = $request->file('image');
        $fileNameLP = $books->image ;
        if ($request->hasfile('image')) {
            $extensionLP = $fichierLP->getClientOriginalName();
            $fileNameLP = 'image/livres/' . time() . '_' . $extensionLP;
            $fichierLP->move(public_path('image/livres/'), $fileNameLP);
        }

        //On met à jour les catégories
        $books->update([
            'image' => $fileNameLP,
            'titre' => $request->titre,
            'auteur_id'  => $request->auteur,
            'resume'  => $request->resume,
            'prix'  => $request->prix,
            'genre_id'  => $request->genre
        ]);

        return redirect()->route('table_livre')->with('update', 'Le livre a été modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        //On cherche à récupérer l'id de la catégorie

        $books = Book::find($request->id); 

        //On supprime la catégorie

        $books->delete();

        return redirect()->route('table_livre')->with('delete', 'Le livre a été supprimé avec succès');
    }
}
