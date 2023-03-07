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
        $user->name = "Jacob";
        $user->email = "jacob@gmail.com";
        $user->password = Hash::make("1010");
        $user->role = "admin";
        $user->save();
    }
}
