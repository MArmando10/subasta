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
            $table->string('title');
            $table->string('condition');
            $table->string('trademark');
            $table->string('description');
            $table->integer('duration');
            $table->integer('dateStart');
            $table->integer('startPrice');
            $table->integer('endPrice');
            $table->integer('cantidad');
            $table->boolean('refundSwitch');
            $table->string('Destino');
            $table->integer('Alto');
            $table->integer('Ancho');
            $table->integer('Largo');
            $table->integer('Peso');
            $table->string('geografi');  
           
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
