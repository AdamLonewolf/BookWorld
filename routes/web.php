<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\GenreController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('master');
});

Route::get('/boutique', function () {
    return view('boutique');
})->name('boutique');

Route::get('/boutique', [BookController::class, "index"]);
Route::get('/livres/{id}', [BookController::class, "show"])->name('Voir_livres');
Route::get('/boutique/{genre?}', [GenreController::class, "index"])->name('genre');