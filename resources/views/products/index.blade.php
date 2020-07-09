@extends('layouts.main')

@section('content')


<div class="container">
    <form action="" class="d-flex">
        <div>
            <a class="btn btn-secondary mb-5" href="{{route('product.create')}}">Agregar products </a>
        </div>
    </form>

    <form action="search" method="POST" role="searchBuscar">
        {{ csrf_field() }}
        <div class="d-flex justify-content-between">
            @if ( !isset($anterior) )
            <input type="text" class="form-control-8" name="categoria" placeholder="Buscar por categoria" value="">
            @else
            <input type="text" class="form-control" name="categoria" placeholder="Buscar por categoria" value="">
            @endif

            <button type="submit" class="btn btn-primary">
                <i class="fas fa-search"></i> Buscar
            </button>

        </div>
    </form>


    <br>

    <body>
        <div class="table-responsive ">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <div class="container ">
                    @foreach ($Users as $user)
                    @foreach ( $user->products as $product)
                    <div class="row intro">
                        <div class="col">

                            {{-- {{ $products->imagenes->count() }} --}}
                            @if ($product->imagenes->count() > 0)
                            @for ($i = 0; $i < 1; $i++) <img src="{{asset($product->imagenes[$i]->url)}}"
                                alt="adasd.jpg" width="200">
                                @endfor
                                @endif


                        </div>
                        <div class="col  tamle">
                            <h2 class="card-text">{{$product->titulo}}</h2>
                            <p class="card-text">{{$product->marca}}</p>
                            <p class="card-text">{{$product->precioInicial}}</p>
                        </div>
                        <div class="row">
                            <div class="col tamle">
                                <p class="card-text">{{$product->descripcion}}</p>
                                <p class="card-text">{{$product->precioReserva}}</p>

                                {{-- @foreach ($products as $product)
                                    @if ($product->status==finish)
                                        @yield(layoutss::view:make('layoutss.ganadora')); 

                                    @else ($product->status==pendiente)
                                        @yield(layoutss::view:make('products.show'));
                                    @endif --}}

                                {{ Form::open(['route' => ['subasta.show', $product], 'method' => 'get'] ) }}
                                {{Form::submit('Más Detalles', ['class' => 'btn btn-secondary mb-5'])}}

                                {{ Form::close() }}
                                {{-- @endforeach --}}

                            </div>
                        </div>

                    </div>
                    <br>
                    @endforeach
                    @endforeach
                </div>
            </table>
        </div>
    </body>
</div>
@endsection