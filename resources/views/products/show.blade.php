@extends('layouts.app')

@section('content')


<div class="container">
   
    <div class="row">
        <div class="bg-secondary">
        <div class="col">
            @foreach ($product->imagenes as $imagen)
            <img src="{{asset ($imagen->url)}}" alt="adasd.jpg" width="200">
        @endforeach
        </div>
    <div class="col">
        <h2  class="card-text">{{$product->titulo}}</h2>
        <p class="card-text">{{$product->marca}}</p>
        <p class="card-text">{{$product->precioInicial}}</p>
    </div>
</div>
    </div>
</div>

  {!!Form::model($Product,['route'=>  ['product.show',$product->id],'method'=>'POST','files'=> true])!!}
  
  {!!Form::close()!!}

{{ $Product->appends('Product')->links() }}
@endsection