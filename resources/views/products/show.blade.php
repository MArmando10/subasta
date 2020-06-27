@extends('layouts.app')

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="">Inicio</a></li>
        <li class="breadcrumb-item active" aria-current="page">Subasta GOI</li>
    </ol>
</nav>
<div class="container">
    <div class="col">
        <h2  class="card-text">{{$producto->titulo}}</h2>
        <p class="card-text">{{$producto->marca}}</p>
        <p class="card-text">{{$producto->precioInicial}}</p>
    </div>

</div>

  {!!Form::model($Product,['route'=>  ['product.show',$product->id],'method'=>'POST','files'=> true])!!}
  
  <h1>hola</h1>
  
  {!!Form::close()!!}

{{ $Product->appends('Product')->links() }}
@endsection