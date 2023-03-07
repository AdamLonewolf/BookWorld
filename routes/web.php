<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\AuteurController;
use App\Http\Controllers\DashboardBookController;
use App\Http\Controllers\DashboardAuthorController;

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

Route::get('/', [HomeController::class, "CarouselCard"])->name('home');

//Route pour la boutique et les détails sur les livres

Route::get('/boutique', [BookController::class, "index"])->name('boutique');
Route::get('/livres/{id}', [BookController::class, "show"])->name('Voir_livres');
Route::get('/boutique/{id}', [GenreController::class, "showByGenre"])->name('genre');

//Route pour la liste des auteurs et les informations sur les auteurs

Route::get('/auteur_list', [AuteurController::class, "index"])->name('auteur_list');
Route::get('/auteurs/{id}', [AuteurController::class, "show"])->name('auteurs');

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

//Routes pour la partie Admin

Route::get('/dashboard_livres', [DashboardBookController::class, "index"])->name('table_livre');
Route::get('/dashboard_auteur', [DashboardAuthorController::class, "index"])->name('table_auteur');

//CRUD des auteurs

Route::get('/new_auteur', [DashboardAuthorController::class, "create"])->name('new_auteur');
Route::post('/store_auteur', [DashboardAuthorController::class, "store"])->name('store_auteur');
Route::get('/edit_auteur/{id}', [DashboardAuthorController::class, "edit"])->name('edit_auteur');
Route::post('/update_auteur', [DashboardAuthorController::class, "update"])->name('update_auteur');
Route::post('/delete_auteur', [DashboardAuthorController::class, "destroy"])->name('delete_auteur');

//CRUD des livres 

Route::get('/new_livre', [DashboardBookController::class, "create"])->name('new_livre');
Route::post('/store_livre', [DashboardBookController::class, "store"])->name('store_livre');
Route::get('/edit_livre/{id}', [DashboardBookController::class, "edit"])->name('edit_livre');
Route::post('/update_livre', [DashboardBookController::class, "update"])->name('update_livre');
Route::post('/delete_livre', [DashboardBookController::class, "destroy"])->name('delete_livre');