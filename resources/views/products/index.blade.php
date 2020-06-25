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
                
                <img src="cinqueterre.jpg" class="app/imagenes[]" alt="Cinque Terre" width="200" height="136"> 
                </div>
                <br>
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title .</p>
                  <a href="/" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
                      <div class="float-right text-primary"></div>
                      <h4 class="card-title text-primary"></h4>
                      <p class="text-info"></p>
                 
                  </div>
              </div>

          </div>
          
 


@endsection
