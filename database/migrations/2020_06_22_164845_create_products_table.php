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
            // $table->unsignedBigInteger('category_id');
            $table->string('titulo');
            $table->integer('categoria');
            $table->integer('condicion');
            $table->string('marca');
            $table->string('descripcion');
            $table->integer('duracion');
            $table->datetime('fechaInicio');
            $table->float('precioInicial');
            $table->float('precioReserva');
            $table->integer('cantidad');
            // $table->boolean('refundSwitch');
            $table->string('Destino');
            $table->integer('Alto');
            $table->integer('Ancho');
            $table->integer('Largo');
            $table->integer('Peso');
            $table->string('geografi');
            $table->foreignId('user_id');
            $table->timestamps();

            //$imagen->url = $request->input('url');
           
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
