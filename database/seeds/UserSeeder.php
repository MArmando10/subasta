<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = new User();
        $user->name = "Admin";
        $user->email = "admin@admin.com";
        $user->password = Hash::make('admin');
        $user->is_admin = true;
        $user->save();


        //prueba
        $user = new User();
        $user->name = "Prueba";
        $user->email = "prueba@prueba.com";
        $user->password = Hash::make('prueba');
        $user->is_admin = false;
        $user->save();

    }
}
