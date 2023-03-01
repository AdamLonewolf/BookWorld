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
        $auteur = Auteur::all(); //On récupère toutes les informations dans la table auteurs
        return view('list_auteur', compact('auteur'));
    }
}
