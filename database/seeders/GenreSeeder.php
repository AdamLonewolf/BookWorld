<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genre = new Genre();
        $genre->nom = 'Fantastique';
        $genre->save();

        $genre = new Genre();
        $genre->nom = 'Horreur';
        $genre->save();

        $genre = new Genre();
        $genre->nom = 'Thriller';
        $genre->save();

        $genre = new Genre();
        $genre->nom = 'Romance';
        $genre->save();

        $genre = new Genre();
        $genre->nom = 'Théâtre';
        $genre->save();

        $genre = new Genre();
        $genre->nom = 'Conte';
        $genre->save();
        
        $genre = new Genre();
        $genre->nom = 'Philosophie';
        $genre->save();
        
        $genre = new Genre();
        $genre->nom = 'Jeunesse';
        $genre->save();

        $genre = new Genre();
        $genre->nom = 'Afrique';
        $genre->save();
    }
}
