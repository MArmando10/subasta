@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Subastar un producto</div>
                <div class="card-body">

                  {!! Form::open(['route' => 'product.store']) !!}
                    //
                  {!! Form::close() !!}

                  <form>
                    <div><h5>Detalles del producto</h5></div>
                    <!--              Titulo       -->
                    <div class="form-group">
                      <label for="FormTitle">Titulo</label>
                      <input type="text" class="form-control" id="FormTitle" placeholder="Titulo">
                    </div>

                    <!--              Fotos        -->
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="FormUpload">Fotos</span>
                      </div>
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="FormPhotos" aria-describedby="FormUpload">
                        <label class="custom-file-label" for="FormPhotos">Archivos seleccionados</label>
                      </div>
                    </div>

                    <!--              Categoria        -->
                    <div class="form-group">
                      <label for="FormCategory">Categoria</label>
                      <select class="form-control" id="FormCategory">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                      </select>
                    </div>

                    <!--              Condicion         -->
                    <div class="form-group">
                      <label for="FormCondition">Condicion</label>
                      <select class="form-control" id="FormCondition">
                        <!-- Rescatar las categorias de la base de datos -->
                        <option>Nuevo</option>
                        <option>Usado</option>
                      </select>
                    </div>
                    <!--              Marca           --> 
                    <div class="form-group">
                      <label for="FormTradeMark">Marca</label>
                      <input type="text" class="form-control" id="FormTradeMark" placeholder="Titulo">
                    </div>
                    <!--              Descripcion      -->
                    <div class="form-group">
                      <label for="FormDescription">Descripción</label>
                      <textarea class="form-control" id="FormDescription" rows="3"></textarea>
                    </div>

                    <div><h5>Detalles de venta</h5></div>
                    <!--      Duracion       -->
                    <!-- dias semanas meses -->
                    <div class="form-group row">
                      <label for="example-number-input" class="col-2 col-form-label">Number</label>
                      <div class="col-10">
                        <input class="form-control" type="number" value="42" id="example-number-input">
                      </div>
                    </div>
                    <!--     Horario para comenzar -->
                    <div class="form-group row">
                      <label for="example-datetime-local-input" class="col-2 col-form-label">Date and time</label>
                      <div class="col-10">
                        <input class="form-control" type="datetime-local" value="2011-08-19T13:45:00" id="example-datetime-local-input">
                      </div>
                    </div>

                    <!--          Precio                -->
                    <!--          Precio inicial        -->
                    <div class="input-group">
                      <input type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
                      <div class="input-group-append">
                        <span class="input-group-text">$</span>
                        <span class="input-group-text">0.00</span>
                      </div>
                    </div>
                    <!--           Precio reserva       -->
                    <div class="input-group">
                      <input type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
                      <div class="input-group-append">
                        <span class="input-group-text">$</span>
                        <span class="input-group-text">0.00</span>
                      </div>
                    </div>
                    <!--            Cantidad              -->
                    <div class="form-group row">
                      <label for="example-number-input" class="col-2 col-form-label">Number</label>
                      <div class="col-10">
                        <input class="form-control" type="number" value="42" id="example-number-input">
                      </div>
                    </div>

                    <div><h5>Detalles de devolución</h5></div>
                    <!--            Devolucion              -->
                    <div class="custom-control custom-switch">
                      <input type="checkbox" class="custom-control-input" id="customSwitch1">
                      <label class="custom-control-label" for="customSwitch1">Toggle this switch element</label>
                    </div>

                    <div><h5>Detalles de envío</h5></div>

                    <!--            Tipo de envio             -->
                    <div class="form-group">
                      <label for="FormCondition">Condicion</label>
                      <select class="form-control" id="FormCondition">
                        <!-- Rescatar las categorias de la base de datos -->
                        <option>Nuevo</option>
                        <option>Usado</option>
                      </select>
                    </div>
                    <!--            Peso y dimensiones del paquete -->
                    <!-- Alto -->
                    <div class="form-group row">
                      <label for="example-number-input" class="col-2 col-form-label">Alto</label>
                      <div class="col-10">
                        <input class="form-control" type="number" value="42" id="example-number-input">
                      </div>
                    </div>

                    <!-- Ancho -->
                    <div class="form-group row">
                      <label for="example-number-input" class="col-2 col-form-label">Ancho</label>
                      <div class="col-10">
                        <input class="form-control" type="number" value="42" id="example-number-input">
                      </div>
                    </div>

                    <!-- Largo -->
                    <div class="form-group row">
                      <label for="example-number-input" class="col-2 col-form-label">Largo</label>
                      <div class="col-10">
                        <input class="form-control" type="number" value="42" id="example-number-input">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="FormCondition"></label>
                      <select class="form-control" id="FormCondition">
                        <!-- Rescatar las categorias de la base de datos -->
                        <option>M</option>
                        <option>Cm</option>
                      </select>
                    </div>

                    <!-- Peso -->
                    <div class="form-group row">
                      <label for="example-number-input" class="col-2 col-form-label">Peso</label>
                      <div class="col-10">
                        <input class="form-control" type="number" value="42" id="example-number-input">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="FormCondition"></label>
                      <select class="form-control" id="FormCondition">
                        <!-- Rescatar las categorias de la base de datos -->
                        <option>Kg</option>
                        <option>g</option>
                      </select>
                    </div>

                    <!-- Lista de exclusion -->
                    <div class="form-group">
                      <label for="FormCondition"></label>
                      <select class="form-control" id="FormCondition">
                        <!-- Rescatar las categorias de la base de datos -->
                        <option>Kg</option>
                        <option>g</option>
                      </select>
                    </div>

                    <!-- Ubicacion del articulo -->
                    <div class="form-group">
                      <label for="FormCondition"></label>
                      <select class="form-control" id="FormCondition">
                        <!-- Rescatar las categorias de la base de datos -->
                        <option>Kg</option>
                        <option>g</option>
                      </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection