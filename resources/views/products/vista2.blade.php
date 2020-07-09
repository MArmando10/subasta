<div class="row intro">
    <div class="col">

        {{-- {{ $products->imagenes->count() }} --}}
        @if ($product->imagenes->count() > 0)
        @for ($i = 0; $i < 1; $i++) <img src="{{asset($product->imagenes[$i]->url)}}"
            alt="adasd.jpg" width="200">
            @endfor
            @endif


    </div>
    <div class="col  tamle">
        <h2 class="card-text">{{$product->titulo}}</h2>
        <p class="card-text">{{$product->marca}}</p>
        <p class="card-text">{{$product->precioInicial}}</p>
    </div>
    <div class="row">
        <div class="col tamle">
            <p class="card-text">{{$product->descripcion}}</p>
            <p class="card-text">{{$product->precioReserva}}</p>

            {{-- @foreach ($products as $product)
                @if ($product->status==finish)
                    @yield(layoutss::view:make('layoutss.ganadora')); 

                @else ($product->status==pendiente)
                    @yield(layoutss::view:make('products.show'));
                @endif --}}

            {{ Form::open(['route' => ['subasta.show', $product], 'method' => 'get'] ) }}
            {{Form::submit('Más Detalles', ['class' => 'btn btn-secondary mb-5'])}}

            {{ Form::close() }}
            {{-- @endforeach --}}

        </div>
    </div>

</div>