<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ----- Generales -----
        // Nuevo
        // Usado


        // ----- Por tipo -----
        // Electronica
        // Consumo
        // Hogar
        // Oficina
        // Vehiculo

        $category = new Category();
        $category->name = "Electrónica";
        $category->save();

        $category = new Category();
        $category->name = "Consumo";
        $category->save();

        $category = new Category();
        $category->name = "Hogar";
        $category->save();

        $category = new Category();
        $category->name = "Oficina";
        $category->save();

        $category = new Category();
        $category->name = "Vehiculo";
        $category->save();
    }
}
