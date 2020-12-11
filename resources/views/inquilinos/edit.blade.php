@extends('Layouts.template')

@section('content')

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
      
        <!-- Nested Row within Card Body -->
        <div class="row">
        <div class="col-lg-10">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">EDITAR INQUILINOS</h1>
              </div>
              <form action="{{route('inquilinos.update', $inquilinoRow->id)}}" method="post">
              @csrf
              @method('put')
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <label>NOMBRE INQUILINO</label>
                    <input type="text" name="nombre_inquilino" class="form-control" value="{{$inquilinoRow->nombre_inquilino}}">
                  </div>
                  <div class="col-sm-6">
                    <label>CORREO</label>
                    <input type="text" name="correo" class="form-control" value="{{$inquilinoRow->correo}}">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <label>DIRECCION</label>
                    <input type="text" name="direccion" class="form-control" value="{{$inquilinoRow->direccion}}">
                  </div>
                  <div class="col-sm-6">
                  <label>TELEFONO</label>
                    <input type="text" name="telefono" class="form-control" value="{{$inquilinoRow->telefono}}">
                  </div>
                </div>
                <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <label>ESTADO CIVIL</label>
                    <input type="text" name="estado_civil" class="form-control" value="{{$inquilinoRow->estado_civil}}">
                  </div>
                </div>
                <input type="hidden" name="id" value="{{$inquilinoRow->id}}">
                <button type="submit" class="btn btn-primary">Actualizar</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

@endsection