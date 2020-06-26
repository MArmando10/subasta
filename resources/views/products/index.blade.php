@extends('layouts.app')


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

<form action="" method="POST" role="search">
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
        <a href=""><button type="button" class="btn btn-default">
          <i class="fas fa-broom"></i> Limpiar filtro
        </button></a>
    </div>
</form>
</div>

<div class="container">
    @foreach ($Users as $user)
        @foreach ( $user->products as $producto)
        <div class="row intro">
            <div class="col">
                {{ $producto->imagenes->count() }}
            
               {{--  @isset($producto->imagenes)
                    @if ($producto->imagenes->count() > 0)
                        {{ $url = $producto->$imagenes ?? $imagenes }}
                        {{ $url }}
                        
                        <img src="{{asset($url->url)}}" alt="adasd.jpg" width="200">
                       
                    @endif    
                @endisset
                 --}}
                {{-- 
                @foreach ($producto->imagenes as $imagen)
                    <img src="{{asset ($imagen->url)}}" alt="adasd.jpg" width="200">
                @endforeach
                --}}
            </div>
            <div class="col">
                <h2  class="card-text">{{$producto->titulo}}</h2>
                <p class="card-text">{{$producto->marca}}</p>
                <p class="card-text">{{$producto->precioInicial}}</p>
            </div>
            <div class="col">
                <p class="card-text">{{$producto->descripcion}}</p>
                <p class="card-text">{{$producto->precioReserva}}</p>
                <a class="btn btn-secondary mb-5" href="">Más Detalles </a>
            </div>
        </div>
        <br>
        @endforeach
    @endforeach
</div>

@endsection