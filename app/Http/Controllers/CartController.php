<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class CartController extends Controller
{
    
    /**
     * Cette fonction nous redige sur la vue du panier
     */

     public function cart(){
        return view('cart');
     }

    /**
     * Fonction pour ajouter des produits au panier
     */
     public function addToCart(Request $request){


      //Critères de validation du formulaire

      $request->validate([
         'quantite' =>'required|numeric'
     ]);     

      //On recherche d'abord l'identifiant du produit que le client cherche à ajouter

      $bookId = $request->id;
      $book = Book::findOrFail($bookId);  //Si le produit n'est pas trouvé alors, on renvoie un message d'erreur

     
      $cart = session()->get('cart' . auth()->id());
      //On récupère et on met à jour le contenu du panier stocké dans la session de l'utilisateur connecté

      // Si le panier est vide, on initialise un tableau vide.
            if (!$cart) {
               $cart = [];
         }




            // On ajoute le produit au panier.
            if (isset($cart[$book->id])) {
               $cart[$book->id]['quantite'] += $request->quantite;
         } else {
               $cart[$book->id] = [
                  'id' =>$book->id,
                  'image' => $book->image,
                  'titre' => $book->titre,
                  'prix' => $book->prix,
                  'quantite' => $request->quantite,
               ];
      }

      session()->put('cart' . auth()->id(), $cart); //On met à jour le panier dans la session pour que l'utilisateur puisse voir les modifications apportées
      return redirect()->route('cart');

     }

      /**
     * Fonction pour afficher des produits au panier
     */

     public function ShowCart(){

        //On récupère les données du panier, ainsi que de l'ID de l'utilisateur afin de distinguer chaque panier

     $cart = session()->get('cart' . auth()->id());

     //Fonction pour calculer le total de tous les éléments du panier
    $total = 0;
    $tva = 0; //Le total est à zéro par défaut
    $subtotal = 0; //Le sous-total

    foreach($cart as $product){
      $subtotal = ($product['prix'] * $product['quantite']); //La quantité fois le prix pour trouver le sous total
     }


    foreach($cart as $product){
     $tva += ($subtotal / 100 * 20); //On fait un boucle for each pour recuperer le prix et la quantité de chaque produit, puis on les multiplie.
    }

    $total = $subtotal + $tva; 

    


   
     return view('cart', compact('cart','total','subtotal','tva'));

    }


    public function deleteCart(Request $request){
     
     

     $cart = session()->get('cart' . auth()->id());

 
        //Si le id du produit existe dans le tableau cart, on le retire et on remet à jour les données du panier.

        if (isset($cart[$request->id])) {
           unset($cart[$request->id]);
           session()->put('cart' . auth()->id(), $cart);
       }

       return redirect()->route('cart');
    }


}
