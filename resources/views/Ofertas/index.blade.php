@extends('layouts.main')

@section('breadcrumbs')

@section('content')

<div class="container">
    
   <br>
    <div>
        <h1>Ofertas </h1>
    </div>
   <br>
   
            @if(isset($ofertas))

            <div class="table-responsive">
              
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                   
                    <thead class="thead-dark text-center">
                        <tr>
                            <th scope="col">Nombre Comprador</th>
                            <th scope="col">Nombre Vendedor</th>
                            <th scope="col">Oferta Producto</th>
                        </tr>
                    </thead>

                    <tbody class="thead-dark text-center">
                        @foreach($ofertas as $oferta)  
                        <tr>
                            <td>{{ $oferta->user->name }}</td>
                            <td>{{ $oferta->product->user->name }}</td>
                            <td>{{ $oferta->oferta }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>  
            </div>
        </div>
@endif

{{-- {{ $oferta->links() }} --}}
@endsection