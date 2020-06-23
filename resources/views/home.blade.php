@extends('layouts.app')

@section('content')

<div class="">
    <div class="bg-secondary">
        <div>
            <h4>Mejores Precios</h4>
        </div>
        <div class="container-sm">
            <img src="{{ asset('img/pruebas/headphones.jpg') }}" class="rounded" alt="...">
        </div>

    </div>
    
    <div>
    
    </div>
    
    <div>
    
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
