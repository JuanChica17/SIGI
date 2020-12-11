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
                <h1 class="h4 text-gray-900 mb-4">REGISTRAR ALQUILERES</h1>
              </div>
              <form action="{{route('alquilers.store')}}" method="post">
              @csrf
              @method('post')
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <label>PRECIO ALQUILER</label>
                    <input type="number" name="precio_alquiler" class="form-control">
                  </div>
                  <div class="col-sm-6">
                    <label>FORMA PAGO</label>
                    <input type="text" name="forma_pago" class="form-control">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <label>FECHA INICIO</label>
                    <input type="date" name="fecha_inicio" class="form-control">
                  </div>
                  <div class="col-sm-6">
                  <label>FECHA FIN</label>
                    <input type="date" name="fecha_fin" class="form-control">
                  </div>
                </div>
                <button type="submit" class="btn btn-primary">Registrar</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

@endsection