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
    @if (Session::has('message'))
      <div class="alert alert-info">{{Session::get('message')}}</div>
    @endif


      <a class="btn btn-secondary mb-5" href="{{route('product.create')}}">Agregar producto </a>
      
 
 {{--    <br>
  @if(isset($usuario))
<div class="table-responsive">
<table class="table table-striped" style="text-align:center">
<table class="table mt-5" id="miTabla">
    <thead class="thead-dark">
        <tr>
       
        </tr>
    </thead>
    <tbody>

        @endforeach
    </tbody>
</table>


</div> --}}


@endsection
