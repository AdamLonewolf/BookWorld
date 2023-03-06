<?php

namespace App\Http\Controllers;

use App\Models\Auteur;
use Illuminate\Http\Request;

class AuteurController extends Controller
{

    /**
     * Renvoie la page de la liste de tous les auteurs
     */
    public function index(){
        $auteur = Auteur::paginate(8); //On récupère toutes les informations dans la table auteurs
        return view('list_auteur', compact('auteur'));
    }

    public function show($id){
        //Cette fonction va récupérer les informations de l'id de l'auteur dans la liste des auteurs
        $auteur = Auteur::findOrFail($id);
        $livres = $auteur->oeuvres()->get(); // Récupère tous les livres de l'auteur
        return view('auteurs', compact('auteur', 'livres'));
    }
}
