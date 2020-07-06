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
    <div class="row border-lines"></div>
    <div class="row" style="padding: 10px;">
        <div class="col">
            <div class="row">
                @if ($product->imagenes->count() > 0)
                <div class="col-1" style="flex-flow: wrap; z-index: 100">
                    @foreach ($product->imagenes as $imagen)
<<<<<<< Updated upstream
                    <div style="margin: 2px; border-color: blue; border-left-style: solid;">
                        <img src="{{asset($imagen->url)}}" alt="adasd.jpg" style="height: auto; width: 100px;" onclick="imageSelected(@php echo $index; @endphp, '{{asset($imagen->url)}}')">
                    </div>
                    @php
                        $index++;
                    @endphp
                    @endforeach
                </div>
                <div class="col">
                    <img id="myImg" src="{{asset($product->imagenes[0]->url)}}" alt="adasd.jpg" style="height: auto; width: 100%;">
                </div>
                @endif
            </div>
=======
                <img src="{{asset ($imagen->url)}}" alt="adasd.jpg" width="70" style="height: auto; transform: translateX(-20%)" >
                @endforeach 
                    @endif
            </div> --}}
            <div class="col-3 text-center" style="transform: translateY(20%);">
            hol  
            {{-- @foreach($imagenes as $imagen) --}}

            {{-- <div class="item"><img src="{{asset($product->imagenes[$i]->url)}}" alt="slider-image" class="img-responsive">
            </div> --}}

            {{-- @endforeach --}}
>>>>>>> Stashed changes
        </div>
        <div class="col" style="width: 100%; align-self: center; height: auto;">
            <div class="row">
                <div class="col">
                    <h1 class="font-weight-bold">Bose 700</h1>
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
                    <form class="form-group" action="">
                        <div class="form-group row">
                            <div class="col">
                                <h4 class="font-wight-bold">Oferta actual 350 GOI</h4>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col">
                                <div class="row">
                                    <div class="col">
                                        <input class="form-control" type="number" name="" id="">
                                    </div>
                                    <div class="col">
                                        <button class="btn btn-primary" type="submit"> Ofertar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col">
                                <p class="font-wight-bold">Ofrece 351 o más</p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row border-lines"></div>
    <div class="container">
        mas detalles
    </div>
    <div class="row border-lines"></div>

</div>
<script>
    function imageSelected(index, url){
        var img = document.getElementById("myImg");
        img.src = url;
        console.log(index);
        console.log(url);
    }
</script>
@endsection