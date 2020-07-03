@extends('layouts.main')


@section('breadcrumbs')

{{-- 
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="">Inicio</a></li>
        <li class="breadcrumb-item active" aria-current="page">Subasta GOI</li>
    </ol>
</nav>
@endsection --}}

@section('content')
<div class="container">
    <div>
        <a class="btn btn-secondary mb-5" href="{{route('product.create')}}">Agregar products </a>
    </div>

    <form action=" " method="POST" role="searchBuscar">
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
            <a href=""><button  type="button" class="btn btn-default btn-success">
                    <i class="fas fa-broom"></i> Limpiar filtro
                </button></a>
        </div>
    </form>


    <br>

    <body> 
    <table id="example" class="table table-striped table-bordered" style="width:100%">
    <div class="container">
        @foreach ($Users as $user)
            @foreach ( $user->products as $product)
                <div class="row intro">
                    <div class="col">
                        
                        {{-- {{ $products->imagenes->count() }}  --}}
                        @if ($product->imagenes->count() > 0)
                            @for ($i = 0; $i < 1; $i++)
                                <img src="{{asset($product->imagenes[$i]->url)}}" alt="adasd.jpg" width="200">
                            @endfor
                        @endif                

                        {{--

                        
                        @foreach ($products->imagenes as $imagen)
                        <img src="{{asset ($imagen->url)}}" alt="adasd.jpg" width="200">
                        @endforeach
                        --}}

                    </div>
                    <div class="col">
                        <h2 class="card-text">{{$product->titulo}}</h2>
                        <p class="card-text">{{$product->marca}}</p>
                        <p class="card-text">{{$product->precioInicial}}</p>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p class="card-text">{{$product->descripcion}}</p>
                            <p class="card-text">{{$product->precioReserva}}</p>
                            {{ Form::open(['route' => ['product.show', $product], 'method' => 'get'] ) }}
                            {{Form::submit('Más Detalles', ['class' => 'btn btn-secondary mb-5'])}}
                            
                            {{ Form::close() }}
                        </div>
                    </div>

                </div>
                <br>
            @endforeach
        @endforeach

        {{-- {{ $product->appends('product')->links() }} --}}
    </table>
</body>
    </div>

{{-- 


    <div class="cont">
        <div class="slider"></div>
        <ul class="nav"></div>
        <div data-target='right' class="side-nav side-nav--right"></div>
        <div data-target='left' class="side-nav side-nav--left"></div>
    </div> --}}
    
    @endsection