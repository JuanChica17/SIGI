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
                <h1 class="h4 text-gray-900 mb-4">EDITAR INMUEBLES</h1>
              </div>
              <form action="{{route('inmuebles.update', $inmuebleRow->id)}}" method="post">
              @csrf
              @method('put')
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <label>DIRECCION</label>
                    <input type="text" name="direccion" class="form-control" value="{{$inmuebleRow->direccion}}">
                  </div>
                  <div class="col-sm-6">
                    <label>TIPO</label>
                    <input type="text" name="tipo" class="form-control" value="{{$inmuebleRow->tipo}}">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <label>DESCRIPCION</label>
                    <input type="text" name="descripcion" class="form-control" value="{{$inmuebleRow->descripcion}}">
                  </div>
                  <div class="col-sm-6">
                  <label>PRECIO</label>
                    <input type="number" name="precio" class="form-control" value="{{$inmuebleRow->precio}}">
                  </div>
                </div>
                <input type="hidden" name="id" value="{{$inmuebleRow->id}}">
                <button type="submit" class="btn btn-primary">Actualizar</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

@endsection