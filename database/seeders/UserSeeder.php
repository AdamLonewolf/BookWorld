<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //J'enregistre mes données dans la bdd (admin)
        $user = new User();
        $user->name = "Adam Coulibaly";
        $user->email = "ismomee2403@gmail.com";
        $user->password = Hash::make("meesmo2403");
        $user->role = "admin";
        $user->save();
    }
}
