@extends('layouts.main')

@section('content')


<div class="container">
   
            @if(isset($venta))

            <div class="table-responsive">
                <table class="table table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Nombre Comprador</th>
                            <th scope="col">Nombre Vendedor</th>
                            <th scope="col">Producto</th>
                        </tr>
                    </thead>
                    <tbody class="thead-dark">
                        @foreach($venta as $u)
                        <tr>
                        <td>Todas las Ofertas</td>
                        <td>{{$u->venta->comprador_id }}</td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
{{ $venta->links() }}
@endif

@endsection