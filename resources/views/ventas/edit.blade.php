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
                <h1 class="h4 text-gray-900 mb-4">EDITAR VENTAS</h1>
              </div>
              <form action="{{route('ventas.update', $ventaRow->id)}}" method="post">
              @csrf
              @method('put')
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <label>PRECIO</label>
                    <input type="number" name="precio" class="form-control" value="{{$ventaRow->precio}}">
                  </div>
                  <div class="col-sm-6">
                    <label>FORMA PAGO</label>
                    <input type="text" name="Forma_pago" class="form-control" value="{{$ventaRow->Forma_pago}}">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <label>NOMBRE COMPRADOR</label>
                    <input type="text" name="nombre_comprador" class="form-control" value="{{$ventaRow->nombre_comprador}}">
                  </div>
                  <div class="col-sm-6">
                  <label>CORREO</label>
                    <input type="text" name="correo" class="form-control" value="{{$ventaRow->correo}}">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <label>DIRECCION</label>
                    <input type="text" name="direccion" class="form-control" value="{{$ventaRow->direccion}}">
                  </div>
                  <div class="col-sm-6">
                    <label>TELEFONO</label>
                    <input type="text" name="telefono" class="form-control" value="{{$ventaRow->telefono}}">
                  </div>
                </div>
                <input type="hidden" name="id" value="{{$ventaRow->id}}">
                <button type="submit" class="btn btn-primary">Actualizar</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

@endsection