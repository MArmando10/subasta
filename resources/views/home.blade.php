@extends('layouts.app')

@section('content')

<div class="col">
    <div class="bg-secondary">
        <div class="row">
        <div class="col-3">
            <h4 class="text-write">Mejores Precios</h4>
        </div>
        <div class="container-sm">
            <div class="row">
                <div class="col-3">
                    <img src="{{ asset('img/pruebas/headphones.jpg') }}" class="rounded" alt="..." width="200">
                    {{-- <img src="{{asset ($imagenes->url)}}" alt="adasd.jpg" width="200"> --}}
                </div>
                <div class="col-3">
                    <img src="{{ asset('img/pruebas/headphones.jpg') }}" class="rounded" alt="..." width="200">
                    {{-- <img src="{{asset ($imagenes->url)}}" alt="adasd.jpg" width="200"> --}}
                </div>
            </div>     
        </div>
        </div>
    </div>
</div>
<br>    

    <div class="col">
        <div class="bg-secondary">
            <div class="col">
            <div class="row">
            <div class="col-3">
                <h4 class="text-write">Explora lo mejor en hogar y cocina</h4>
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
</div>  

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if (Auth::user()->isAdmin())
                        Eres Administrador
                    @else
                        Bienvenido
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
