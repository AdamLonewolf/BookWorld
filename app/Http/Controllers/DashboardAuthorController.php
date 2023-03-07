<?php

namespace App\Http\Controllers;

use App\Models\Auteur;
use Illuminate\Http\Request;

class DashboardAuthorController extends Controller
{
    public function index()
    {   
        //Affiche tous les livres
        $auteur = Auteur::paginate(10);
        return view('admin.dashboard_auteur' , compact('auteur'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Redirige sur le formulaire d'enregistrement de l'auteur
        $auteur = Auteur::all();
        return view('admin.new_auteur', compact('auteur'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Enregistrer un nouvel auteur

        
        $request->validate([
            'nom' =>'required|max:220',
            'image' =>'required',
            'biographie' =>'required'
        ]);     


        $fichierLP = $request->file('image');
        $fileNameLP = "" ;
        if ($request->hasfile('image')) {
            $extensionLP = $fichierLP->getClientOriginalName();
            $fileNameLP = 'image/auteurs/' . time() . '_' . $extensionLP;
            $fichierLP->move(public_path('image/auteurs/'), $fileNameLP);
        }

        $auteur = Auteur::create([
            'image' => $fileNameLP,
            'nom' => $request->nom,
            'biographie' => $request->biographie,
        ]);

        return redirect()->route('table_auteur')->with('success_auteur', "L'auteur' a été enregistré avec succès"); //Il me redirige sur le dashboard quand c'est terminé.
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $auteur = Auteur::find($id);
        return view('admin.edit_auteur', compact('auteur'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //On récupère l'id de la catégorie via la requête envoyée par le formulaire
        $auteur= Auteur::find($request->id);

        //Enregister la photo
        $fichierLP = $request->file('image');
        $fileNameLP = $auteur->image ;
        if ($request->hasfile('image')) {
            $extensionLP = $fichierLP->getClientOriginalName();
            $fileNameLP = 'image/auteurs/' . time() . '_' . $extensionLP;
            $fichierLP->move(public_path('image/auteurs/'), $fileNameLP);
        }

        //On met à jour les catégories
        $auteur->update([
            'image' => $fileNameLP,
            'nom' => $request->nom,
            'biographie' => $request->biographie,
        ]);

        return redirect()->route('table_auteur')->with('update_auteur', "L'auteur a été modifié avec succès");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        //On cherche à récupérer l'id de la catégorie

        $auteur = Auteur::find($request->id); 

        //On supprime la catégorie

        $auteur->delete();

        return redirect()->route('table_auteur')->with('delete_auteur', "L'auteur a été supprimé avec succès");
    }
}
