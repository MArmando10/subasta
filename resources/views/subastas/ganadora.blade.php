@extends('layouts.main')

@section('content')

@php
$index=0;
@endphp

<div class="container">
    {{ Form::open(['route' => ['subasta.index'], 'method' => 'get'] ) }}
    <input type="hidden" name="product_id" value="">
    {{Form::submit('Regresar <<', ['class' => 'btn btn-primary mb-5'])}}
    {{ Form::close() }}
    <h1 class="tam">Subasta Ganadora</h1>
    <div class="row border-lines"></div> <!-- Linea superior -->
    
        <div class="row" style="padding: 15px;">
            <div class="col-6">
                <div style="flex-flow: wrap; z-index: 100">
                    @foreach ($product->imagenes as $imagen)
                    <div style="margin: 2px; border-color: blue; border-left-style: double;">
                        <img class="imgCir" src="{{asset($imagen->url)}}" alt="adasd.jpg" style="height: auto; width: 80px; "
                        onclick="imageSelected(@php echo $index; @endphp, '{{asset($imagen->url)}}')">
                    </div>
                @php
                $index++;
                @endphp
                @endforeach
                </div>

            <div class="col ">
                <img id="myImg" src="{{asset($product->imagenes[0]->url)}}" alt="adasd.jpg"
                    style="height: auto; width: 80%;">
            </div>

        </div>
        <div class="col-4 tam">
            <h1 class="font-weight-bold ">{{$product->marca}}</h1>
            <p class="text-success font-weight-bold">Envio gratis</p>
            <p>vendido por: user_1</p>
            <h2 class="text-primary font-weight-bold">350 GOI</h2>
            <p>Fecha de entrega estimada: 15 de junio </p>
        </div>
    </div>

    <div class="row border-lines"></div> <!-- Linea media -->

    <div class="row-2">
        <div class="col-6">
            <h1>Dirección de entrega</h1>

            <h3> <img src="/storage/ubicacion.jpg" alt="" style="width:2rem" height="3%"> Av. Patria #512, Prados
                Vallarta, 45020, Zapopan, Jalisco, Mexico</h3>

        </div>
    </div>


    <div class="row border-lines"></div> <!-- Linea inferior -->

</div>
</div>

<script>
    function imageSelected(index, url){
        var img = document.getElementById("myImg");
        img.src = url;
    }
</script>

@endsection