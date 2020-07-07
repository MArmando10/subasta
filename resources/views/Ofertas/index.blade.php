@extends('layouts.main')

@section('breadcrumbs')

@section('content')

<div class="container">
    
   <br>
        <h1>Ofertas</h1>
   <br>
   
            @if(isset($oferta))

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
                        @foreach($oferta as $p)  
                        <tr>
                            <td>{{ $p->product_id }}</td>
                            <td>{{ $p->user_id }}</td>
                            <td>{{ $p->oferta }}</td>
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