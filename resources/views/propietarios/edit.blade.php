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
                <h1 class="h4 text-gray-900 mb-4">EDITAR PROPIETARIOS</h1>
              </div>
              <form action="{{route('propietarios.update', $propietarioRow->id)}}" method="post">
              @csrf
              @method('put')
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <label>NOMBRE</label>
                    <input type="text" name="nombre" class="form-control" value="{{$propietarioRow->nombre}}">
                  </div>
                  <div class="col-sm-6">
                    <label>APELLIDO</label>
                    <input type="text" name="apellido" class="form-control" value="{{$propietarioRow->apellido}}">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <label>CORREO</label>
                    <input type="text" name="correo" class="form-control" value="{{$propietarioRow->correo}}">
                  </div>
                  <div class="col-sm-6">
                  <label>DIRECCION</label>
                    <input type="text" name="direccion" class="form-control" value="{{$propietarioRow->direccion}}">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <label>TELEFONO</label>
                    <input type="text" name="telefono" class="form-control" value="{{$propietarioRow->telefono}}">
                  </div>
                  <div class="col-sm-6">
                    <label>CUENTA BANCARIA</label>
                    <input type="text" name="cuenta_bancaria" class="form-control" value="{{$propietarioRow->cuenta_bancaria}}">
                  </div>
                </div>
                <input type="hidden" name="id" value="{{$propietarioRow->id}}">
                <button type="submit" class="btn btn-primary">Actualizar</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

@endsection