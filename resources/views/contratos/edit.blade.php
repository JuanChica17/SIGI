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
                <h1 class="h4 text-gray-900 mb-4">EDITAR CONTRATOS</h1>
              </div>
              <form action="{{route('contratos.update', $contratoRow->id)}}" method="post">
              @csrf
              @method('put')
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <label>SERVICIO PRESTADO</label>
                    <input type="text" name="servicio_que_presta" class="form-control" value="{{$contratoRow->servicio_que_presta}}">
                  </div>
                  <div class="col-sm-6">
                    <label>VALOR COMISION</label>
                    <input type="number" name="valor_comision" class="form-control" value="{{$contratoRow->valor_comision}}">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <label>FECHA INICIO</label>
                    <input type="date" name="fecha_inicio" class="form-control" value="{{$contratoRow->fecha_inicio}}">
                  </div>
                  <div class="col-sm-6">
                  <label>FECHA FIN</label>
                    <input type="date" name="fecha_fin" class="form-control" value="{{$contratoRow->fecha_fin}}">
                  </div>
                </div>
                <input type="hidden" name="id" value="{{$contratoRow->id}}">
                <button type="submit" class="btn btn-primary">Actualizar</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

@endsection