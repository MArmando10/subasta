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

<h1 class="text-Left">Subasta GOI</h1>
<br><br>
  

  <h3 class="text-Left"> Subasta </h3>
    
      <a class="btn btn-secondary mb-5" href="{{route('product.create')}}">Agregar producto </a>

      <div class="row">
          <div class="col-3 text-center flex-column d-none d-sm-flex">
              
              <div class="col py-2">
              <div class="card border-info ">
                  <div class="card-body">
                <div class="container">
                @foreach ( Auth::user()->products as $producto)
                    @foreach ($producto->imagenes as $imagen)

                <img src="{{asset ($imagen->url)}}" alt="adasd.jpg" > 
                @endforeach              
                @endforeach
                </div>
                <br>
                </div>
              </div>
              <h2>Detalles</h2>
              <p class="card-text">{{$producto->titulo}}</p>
              <p class="card-text">{{$producto->marca}}</p>
              <p class="card-text">{{$producto->precioInicial}}</p>
                 
                  </div>
              </div>

          </div>
          
 
         

@endsection