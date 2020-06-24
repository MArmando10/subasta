@extends('layouts.layout')

@section('breadcrumbs')

  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
       <li class="breadcrumb-item"><a href="{{route('home')}}">Inicio</a></li>
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

  @if(Auth::user()->can('USUARIO-CREATE') || Auth::user()->can('TODO') )

      <a class="btn btn-secondary mb-5" href="{{ route('products.create') }}">Agregar producto </a>
      
   @endif
    <br>
  @if(isset($usuario))
<div class="table-responsive">
<table class="table table-striped" style="text-align:center">
{{-- <table class="table mt-5" id="miTabla"> --}}
    <thead class="thead-dark">
        <tr>
            <{{-- th scope="col">cambio en la dinamica</th>
            <th scope="col">Necesidades de atención</th>
            <th scope="col">Daño patrimonial</th>
            <th scope="col">Opciones</th> --}}
        </tr>
    </thead>
    <tbody>

         @foreach($usuario as $u)
        <tr>
            {{-- <th scope="row">{{ $u->id }}</th> --}}
          {{--   <td>{{ $u->cambio }}</td>
            <td>{{ $u->necesidades}}</td>
            <td>{{ $u->daño }}</td> --}}

            <td>



            </td>
        </tr>
        @endforeach
    </tbody>
</table>


</div>
@endif

@endsection