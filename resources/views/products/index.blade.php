@extends('layouts.main')


@section('breadcrumbs')


<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="">Inicio</a></li>
        <li class="breadcrumb-item active" aria-current="page">Subasta GOI</li>
    </ol>
</nav>
@endsection

@section('content')
<div class="container">
    <div>
        <a class="btn btn-secondary mb-5" href="{{route('product.create')}}">Agregar producto </a>
    </div>

    <form action=" " method="POST" role="search">
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
            <a href="products.  "><button type="button" class="btn btn-default">
                    <i class="fas fa-broom"></i> Limpiar filtro
                </button></a>
        </div>
    </form>


    <br>

    {{ $Products->appends('Products')->links() }}
    
    <div class="container">
        @foreach ($Users as $user)
        @foreach ( $user->products as $producto)
        <div class="row intro">
            <div class="col">
                {{-- {{ $producto->imagenes->count() }}  --}}
                @if ($producto->imagenes->count() > 0)
                    @for ($i = 0; $i < 1; $i++)
                        <img src="{{asset($producto->imagenes[$i]->url)}}" alt="adasd.jpg" width="200">
                    @endfor
                @endif                

                {{--

                
                @foreach ($producto->imagenes as $imagen)
                <img src="{{asset ($imagen->url)}}" alt="adasd.jpg" width="200">
                @endforeach
                --}}

            </div>
            <div class="col">
                <h2 class="card-text">{{$producto->titulo}}</h2>
                <p class="card-text">{{$producto->marca}}</p>
                <p class="card-text">{{$producto->precioInicial}}</p>
            </div>
            <div class="row">
                <div class="col">
                    <p class="card-text">{{$producto->descripcion}}</p>
                    <p class="card-text">{{$producto->precioReserva}}</p>
                    {{ Form::open(['route' => ['product.show', $producto], 'method' => 'get'] ) }}
                    {{Form::submit('Más Detalles', ['class' => 'btn btn-secondary mb-5'])}}
                    
                    {{ Form::close() }}
                </div>
            </div>

        </div>
        <br>
        @endforeach
        @endforeach

        {{ $Products->appends('Products')->links() }}
    </div>
    @endsection