<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\GenreController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route pour l'accueil de la page

Route::get('/', function () {
    return view('home');
})->name('home');


//Route pour la boutique et les détails sur les livres
Route::get('/boutique', [BookController::class, "index"])->name('boutique');
Route::get('/livres/{id}', [BookController::class, "show"])->name('Voir_livres');
Route::get('/genre/{id}', [GenreController::class, "showByGenre"])->name('genre');



//Route pour la liste des auteurs et les informations sur les auteurs

Route::get('/auteur_list', [AuteurController::class, "index"])->name('auteur_list');


//Authentication de l'utilisateur 
Route::get('/admin', [AuthController::class, "dashboard"])->name('dashboard');
Route::get('/login_page', [AuthController::class, "loginPage"])->name('login_page');
Route::get('/register_page', [AuthController::class, "registerPage"])->name('register_page');
Route::post('/login', [AuthController::class, "authenticate"])->name('login');
Route::post('/register', [AuthController::class, "register"])->name('register');
Route::post('/logout',[AuthController::class,"logout"])->name('logout');

//Routes pour le panier

Route::middleware('auth')->group(function () {
    Route::post('/cart/add', [CartController::class, 'addToCart'])->name('addCart');
    Route::get('/cart/show', [CartController::class, 'ShowCart'])->name('cart');
});
Route::post('/cart/delete', [CartController::class, 'deleteCart'])->name('deleteCart');


