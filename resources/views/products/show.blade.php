@extends('layouts.main')

@section('content')

<style>
    .border-lines {
        background-color: darkgrey;
        height: 10px;
    }

    .ofertar-style {
        border-radius: 10px;
        padding-top: 5px;
        width: 50%;
        min-width: 250px;
    }
</style>
@php
$index=0;
@endphp
<div class="container">
    <div class="row border-lines"></div> <!-- Linea superior -->

    <div class="row" style="padding: 10px;">
        <div class="col">
            <div class="row">
                @if ($product->imagenes->count() > 0)
                <div class="col-1" style="flex-flow: wrap; z-index: 100">
                    @foreach ($product->imagenes as $imagen)
                    <div style="margin: 2px; border-color: blue; border-left-style: solid;">
                        <img src="{{asset($imagen->url)}}" alt="adasd.jpg" style="height: auto; width: 100px;"
                            onclick="imageSelected(@php echo $index; @endphp, '{{asset($imagen->url)}}')">
                    </div>
                    @php
                    $index++;
                    @endphp
                    @endforeach
                </div>
                <div class="col">
                    <img id="myImg" src="{{asset($product->imagenes[0]->url)}}" alt="adasd.jpg"
                        style="height: auto; width: 100%;">
                </div>
                @endif
            </div>
        </div>
        <div class="col" style="width: 100%; align-self: center; height: auto;">
            <div class="row">
                <div class="col">
                    <h1 class="font-weight-bold">{{$product->titulo}}</h1>
                    <h2 style="text-align:right"> Fecha de expiración:</h2>
                    <h4 class="card-text" style="text-align:right" id="calc"> {{ $product->fechaFinal}} </h4>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p class="text-success font-weight-bold">Envio gratis</p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p>vendido por: user_1</p>
                </div>
                <div class="col">
                    * * * * *
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h2 class="text-primary font-weight-bold">350 GOI</h2>
                </div>
                <div class="col">
                    Mejor oferta al momento
                </div>
            </div>
            <div class="row bg-secondary ofertar-style">
                <div class="col">
                    {{ Form::open(['route' => ['oferta.store', $product], 'method' => 'post']) }}
                    <div class="form-group row">
                        <div class="col">
                            <h4 class="font-wight-bold">Oferta actual 350 GOI</h4>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col">
                            <input type="hidden" name="product_id" value="{{$product->id}}">
                            <input type="text" name="oferta" class="form-control  text-center" min="0"
                                placeholder="ofertar" pattern="[+]?([0-9]*[.])?[0-9]+" id="oferta">
                            <p class="font-wight-bold">Ofrece 351 o más</p>
                        </div>
                        {{Form::submit('ofertar', ['class' => 'btn btn-primary mb-5'])}}
                    </div>

                    {{Form::close()}}
                </div>
            </div>
        </div>
    </div>

    <div class="row border-lines"></div> <!-- Linea media -->

    <div class="row">
        <div class="col-3 text-center mx-auto d-block">
            <h2>Caracteristicas</h2>
            <p class="card-text">Titulo: {{$product->titulo}}</p>
            <p class="card-text">Categoría: {{$product->categoria}}</p>
            <p class="card-text">Condición: {{$product->condición}}</p>
            <p class="card-text">Marca: {{$product->marca}}</p>
            <p class="card-text">Descripcion: {{$product->descripcion}}</p>
        </div>

        <div class="col-6 cols-sm-3 text-center mx-auto d-block">
            <div class="table-responsive  text-center">
                <table class="table table-striped" style="text-align:center">
                    <thead>
                        <tr>
                            <th>Descripción</th>
                            <th>Precio Reserva</th>
                            <th>Fecha Inicio</th>
                        </tr>
                    </thead>
                    <tbody class="thead-dark">
                        <tr>
                            <td scope="col">{{$product->descripcion}}</td>
                            <td scope="col">{{$product->precioReserva}}</td>
                            <td scope="col">{{$product->fechaInicio}}</td>

                    </tbody>

                    <br>

                    {{-- <div class="col-sm-3"><br> --}}
                    <h2 class="elemento strong">Ultimas Ofertas</h2>
            </div>
            <div class="col float-right">
                <br>
                {{ Form::open(['route' => ['oferta.index', $product], 'method' => 'get']) }}
                <div class="form-group row-12">
                </div>
                    <div class="col">
                    </div>
                    {{Form::submit('Ver todas las ofertas', ['class' => 'btn btn-primary mb-5'])}}
                </div>

                {{Form::close()}}
                
            </div>
            </table>
            <br>
        </div>
    </div>
</div>


<div class="row border-lines"></div> <!-- Linea inferior -->

</div>



<script>
    function imageSelected(index, url){
        var img = document.getElementById("myImg");
        img.src = url;
    }
</script>


<script>
    function sleep(ms) {
        return new Promise(resolve => setTimeout(resolve, ms));
    }

    elemento = document.getElementById('reloj');
    
    async function setTime(){
        while (true) {
            var rest = 10;
            for (let index = 0; index <= 10; index++) {
                elemento.innerText = rest;
                console.log(rest);
                rest = rest - 1;
                await sleep(1000);
            }
        }
    }
    setTime();
    console.log("entra");
</script>

{{ $Products->links() }}
@endsection