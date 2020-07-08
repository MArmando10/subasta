@extends('layouts.main')

@section('content')

<script src="jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="jquery.mlens-1.2.min.js"></script>
<style>
    .border-lines {
        background-color: darkgrey;
        height: 10px;
    }
/* 
    .ofertar-style {
        border-radius: 10px;
        padding-top: 5px;
        width: 50%;
        min-width: 250px;
    }

    img {
        opacity: 0.5;
    }

    img:hover {
        opacity: 1.0;

    } */
</style>
@php
$index=0;
@endphp

<div class="container">


    {{ Form::open(['route' => ['subasta.index'], 'method' => 'get'] ) }}
    <input type="hidden" name="product_id" value="">
    {{Form::submit('Regresar <<', ['class' => 'btn btn-primary mb-5'])}}

    {{ Form::close() }}
    <div class="row border-lines"></div> <!-- Linea superior -->

    <div class="row" style="padding: 15px;">
        <div class="col-7">

            <div class="row">
                {{ $product}}

                {{--

                
                @if ($product->imagenes->count() > 0)
                    @for ($i = 0; $i < 1; $i++) 
                        <img src="{{asset($product->imagenes[$i]->url)}}" alt="adasd.jpg" width="200">
                    @endfor
                @endif
                --}}

            </div>
        </div>
    </div>
    <div class="col" style="width: 100%; align-self: center; height: auto;">
        <div class="row">
            <div class="col">

                <h1 class="font-weight-bold">titulo</h1>
                <p class="text-success font-weight-bold">Envio gratis</p>
                <p>vendido por: user_1</p>
                <h2 class="text-primary font-weight-bold">350 GOI</h2>
                <p>Fecha de entrega estimada: 15 de junio </p>
            </div>
        </div>

        <div class="row border-lines"></div> <!-- Linea media -->

        <div class="row">
            <div class="col-3 text-center mx-auto d-block">
                <h1>Dirección de entrega</h1>

                <h3>Av. Patria #512, Prados Vallarta, 45020, Zapopan, Jalisco, Mexico</h3>
            </div>
        </div>


        <div class="row border-lines"></div> <!-- Linea inferior -->

    </div>
</div>

@endsection