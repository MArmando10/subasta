@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a class="btn btn-primary" href=" {{ route('') }}" role="button">Nuevo</a>
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    Lista de productos
                </div>
            </div>
        </div>
    </div>
</div>
@endsection