<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function loginPage(){
        //Cette fonction va retourner la vue login
        return view('auth.login');
    }

    public function registerPage(){
        //Cette fonction va retourner la vue register
        return view('auth.register');
    }

    public function dashboard(){
        return view('admin.dashboard');
    }

    public function authenticate(Request $request){

        //Critères de validation du formulaire

        $request->validate([
            'email' =>['required','email','max:255'],
            'password' =>'required'
        ]);

        //Filtre qui va récupérer que les infos de ces deux champs dans le formulaire

        $credentials = $request->only('email','password'); 

        //connecte l'utilisateur en créant une session utilisateur et en stockant l'ID de l'utilisateur dans la session.

       if(auth()->attempt($credentials)){
            $user = auth()->user();

            //L'utilisateur a le role admin
            if($user->role === 'admin'){
                return redirect()->route('dashboard');
            } else {
                //L'utilisateur a le role Utilisateur
                return redirect()->route('home');
            }

       } else {
        //retourne des erreurs si un champ est mal renseigné
        return redirect()->back()->withErrors('');
       }
}
    public function register(Request $request){

        //inscription de l'utilisateur

        //Validation des données du formulaire
        $request->validate([
            'name'=>['required','max:255'],
            'email' =>['required','email','max:255'],
            'password' =>'required', 
        ]);        

       $user = User::create([
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'password' => bcrypt($request->input('password'))
        ]);

        auth()->login($user); //Une fois le compte crée, l'utilisateur est connecté automatiquement

        return redirect()->route('home')->with('success', 'Votre compte a été avec succès.');
     }

     public function logout(){
        auth()->logout(); //va supprimer l'ID de session de l'utilisateur.
        return redirect()->route('home');
    }
}
