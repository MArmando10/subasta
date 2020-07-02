@extends('layouts.main')

@section('content')

<div class="container">

    <section>
        <div class="row">
            <div class="col-6 text-center" style="transform: translateY(20%);">
                @if ($product->imagenes->count() >= 0)
                @for ($i = 0; $i < 1; $i++) <img class="col-12 col-sm-6" src="{{asset($product->imagenes[$i]->url)}}" alt="adasd.jpg"
                    width="200" clas s="mx-auto d-block img-fluid" style="height: auto; width:200px; transform: translateX(-20%)">
                    @endfor
                    @foreach ($product->imagenes as $imagen)
                <img src="{{asset ($imagen->url)}}" alt="adasd.jpg" width="70" style="height: auto; transform: translateX(-20%)" >
                @endforeach 
                    @endif
            </div>

       
            <div class="col-4    text-center">
                {{-- <h2 id="reloj"></h2> --}}
                <h2> FEcha de expiración:</h2>
                <h4 class="card-text">{{$product->fechaFinal}}</h4>
                <br>
                <div class="col">
                    <h1 class="card-text text-capitalize">{{$product->titulo}}</h1>
                    <p>Vendido por: {{$product->user_id}}</p>
                    {{-- <p>{{$users->name}}</p> --}}
                    <p>{{$product->name}} Mejor oferta al momento</p>

                    <div class="col col-slg-4 text-center">
                        <div class="bg-secondary text-center bg-secondary-mine">
                            <div class="row-6">
                                <br>
                                <div class="col">
                                    <h4 class=" text-center">Oferta Actual</h4>
                                    {{-- <table width=300 cellspacing=0 cellpadding=0 bgcolor="#333399" border=0> --}}
                                </div>

                                <div class="col text-center bg-secondary text-justify">
                                    <input class="form-control" type="text" min="1" placeholder="Ofertar, solo numeros"
                                        pattern="[+]?([0-9]*[.])?[0-9]+" id="ofertar">
                                    <p type="text" style="">Ofrecer $ o más</p>
                                    {{ Form::open(['route' => ['product.index', $product], 'method' => 'get'] ) }}
                                    {{Form::submit('Ofertar', ['class' => 'btn btn-primary mb-5'])}}
                                    {{Form::close()}}
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
</div>
</section>

<section>
<div class="row intro">
    <div class="col-6 col-sm-3 text-center mx-auto d-block">
        <br>
        <h2>Caracteristicas</h2>
        <p class="card-text">Titulo: {{$product->titulo}}</p>
        <p class="card-text">Categoría: {{$product->categoria}}</p>
        <p class="card-text">Condición: {{$product->condición}}</p>
        <p class="card-text">Marca: {{$product->marca}}</p>
        <p class="card-text">Descripcion: {{$product->descripcion}}</p>
    </div>
    <div class="col-4 cols-sm-3 text-center mx-auto d-block">
        <div class="table-responsive text-center">
            <table class="table table-striped" style="text-align:center">
                <tbody class="thead-dark">
                    <td>Ultímas Ofertas</td>
                    <tr>
                        <th scope="col">{{$product->descripcion}}</th>
                        <th scope="col">{{$product->precioReserva}}</th>
                        <th scope="col">{{$product->fechaInicio}}</th>
                        {{-- <p class="card-text ">{{$product->descripcion}}</p>
                        <p class="card-text ">{{$product->precioReserva}}</p> --}}
                    </tr>
                </tbody>

                <br>
                <div class="row-3 intro">
                    <br>
                    {{ Form::open(['route' => ['venta.index', $product], 'method' => 'get'] ) }}
                    {{Form::submit('Ver todas las ofertas', ['class' => 'btn btn-primary mb-5'])}}
                    {{Form::close()}}
                </div>
        </div>

    </div>

</div>
</section>



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

{{ $Product->appends('Product')->links() }}
@endsection