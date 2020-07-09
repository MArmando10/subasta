@extends('layouts.main')

@section('content')

<style>
    .tam {
        font-size: 2.35rem;
    }
    
    </style>


<div class="container">
    <div class="row justify-content-center tam">
        <div class="col-md-8">
            <div class="card">
                {{-- <div class="card-header">Dashboard</div> --}}

                <div class="card-body text-center">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    @if (Auth::user()->isAdmin())
                    <h1 class="tam">Bienvenido a GOIDEAL</h1>
                    @else
                    Bienvenido
                    @endif
                </div>
            </div>
            <br>
        </div>
        {{ Form::open(['route' => ['subasta.index'], 'method' => 'get'] ) }}
        <input type="hidden" name="product_id" value="">
        {{Form::submit('Mis subastas', ['class' => 'btn btn-primary mb-5'])}}

        {{ Form::close() }}
    </div>
</div>



<div class="col">
    <div class="bg-secondary">
        <div class="row">
            <div class="col-3">
                <h4 class="text-write tam" style="color: white" >Mejores Precios</h4>
            </div>

            <div class="container-sm">
                <div class="row">
                    <div class="col-3">
                        <img src="{{ asset('img/pruebas/headphones.jpg') }}" class="rounded" alt="..." width="200">

                    </div>
                    <div class="col-3">
                        <img src="{{ asset('img/pruebas/headphones.jpg') }}" class="rounded" alt="..." width="200">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- 
<div class="col-7">
    <div class="row">
        
        @if ($product->imagenes->count() > 0)
        <div class="col-1" style="flex-flow: wrap; z-index: 100">
            @foreach ($product->imagenes as $imagen)
            <div style="margin: 2px; border-color: blue; border-left-style: double;">
                <img src="{{asset($imagen->url)}}" alt="adasd.jpg" style="height: auto; width: 80px; "
onclick="imageSelected(@php echo $index; @endphp, '{{asset($imagen->url)}}')">
</div>
@php
$index++;
@endphp
@endforeach
</div>
<div class="col ">
    <img id="myImg" src="{{asset($product->imagenes[0]->url)}}" alt="adasd.jpg" style="height: auto; width: 80%;">
</div>
@endif
</div>
</div>



--}}


<br>

<div class="col">
    <div class="bg-secondary">
        <div class="col">
            <div class="row">
                <div class="col-3">
                    <h4 class="text-write tam" style="color: white">Explora lo mejor en hogar y cocina</h4>
                </div>
                <div class="container-sm">
                    <div class="row">
                        <div class="col-3">
                            <img src="{{ asset('img/pruebas/headphones.jpg') }}" class="rounded" alt="..." width="200">
                        </div>
                        <div class="col-3">
                            <img src="{{ asset('img/pruebas/headphones.jpg') }}" class="rounded" alt="..." width="200">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>



@endsection