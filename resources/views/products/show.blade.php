@extends('layouts.main')

@section('content')


<div class="container">

    <section>

        <div class="row-3 intro">
            <div class="col">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <br>
                        <div class="item active">
                            <div class="row">
                                <div class="col-6">
                                    <br><br>
                                    @if ($product->imagenes->count() > 0)
                                    @for ($i = 0; $i < 1; $i++) <img src="{{asset($product->imagenes[$i]->url)}}"
                                        alt="adasd.jpg" width="200" class="mx-auto d-block img-fluid">
                                        @endfor
                                        @endif
                                        <!-- Left and right controls -->
                                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                            <span class="glyphicon glyphicon-chevron-left"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                            <span class="glyphicon glyphicon-chevron-right"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                </div>
                                <p>Tiempo restante: </p>
                                <div class="col text-center">
                                    <h1 class="card-text text-capitalize">{{$product->titulo}}</h1>
                                    <p>Vendido por: {{$product->name}}</p>
                                    <p>{{$product->name}} Mejor oferta al momento</p>

                                    <div class="col-6">
                                        <div class="bg-secondary text-center bg-secondary-mine">
                                            <div class="row-6">
                                                <div class="col-4">
                                                    <h4 class="text-write text-center">Oferta Actual</h4>
                                                    {{-- <table width=300 cellspacing=0 cellpadding=0 bgcolor="#333399" border=0> --}}
                                                </div>

                                                <div class="col bg-secondary text-justify">
                                                    <input class="test" type="text" name="ofertar" id="" solonumeros();>
                                                    <p type="text" style="">Ofrece $ o más</p>
                                                    {{Form::submit('Ofertar', ['class' => 'btn btn-primary mb-5'])}}
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row intro">
                    <div class="col-8 text-center mx-auto d-block">
                        <br>
                        <h2>Caracteristicas</h2>
                        <p class="card-text">Titulo: {{$product->titulo}}</p>
                        <p class="card-text">Categoría: {{$product->categoria}}</p>
                        <p class="card-text">Condición: {{$product->condición}}</p>
                        <p class="card-text">Marca: {{$product->marca}}</p>
                        <p class="card-text">Descripcion: {{$product->descripcion}}</p>
                    </div>
                    <div class="col">
                        <div class="table-responsive">
                            <table class="table table-striped" style="text-align:center">
                                <tbody class="thead-dark">
                                    <td>Ultímas Ofertas</td>
                                    <tr>
                                        <th scope="col">{{$product->descripcion}}</th>
                                        <th scope="col">{{$product->precioReserva}}</th>
                                        <th scope="col">{{$product->fechaInicio}}</th>
                                        {{-- <p class="card-text ">{{$product->descripcion}}</p>
                                        <p class="card-text ">{{$product->precioReserva}}</p> --}}
                                    </tr>
                                </tbody>

                                <br>
                                <div class="row-3 intro">
                                    {{ Form::open(['route' => ['product.show', $product], 'method' => 'get'] ) }}
                                    <br>
                                    {{Form::submit('Ver todas las ofertas', ['class' => 'btn btn-primary mb-5' ])}}
                                    {{ Form::close() }}
                                </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>

    {{ $Product->appends('Product')->links() }}

    @endsection