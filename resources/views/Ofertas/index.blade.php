@extends('layouts.main')

@section('breadcrumbs')

@section('content')

<div class="container">
    
   <br>
        <h1>Tabla productos</h1>
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

                    <tbody class="thead-dark">
                        @foreach($ofertas as $p)  
                        <tr>
                            <td>{{ $p }}</td>
                            <td></td>
                            <td></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>  
            </div>
        </div>
@endif

@endsection