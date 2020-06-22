<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->string('name');
            $table->bigInteger('reputation')->nullable();
            $table->string('city');
            $table->string('country');
            $table->timestamps();
            //nombre
            //reputacion
            //time
            //ciudad
            //pais
            //tipos de envio
            //ofertas aplicables
            //ranking ofertas
            //favoritos - creo que este es una tabla/ productos favoritos
            //devoluciones
            //imagenes
            //metadata
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
