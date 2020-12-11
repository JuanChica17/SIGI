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
                <h1 class="h4 text-gray-900 mb-4">REGISTRAR INMUEBLES</h1>
              </div>
              <form action="{{route('inmuebles.store')}}" method="post">
              @csrf
              @method('post')
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <label>DIRECCION</label>
                    <input type="text" name="direccion" class="form-control">
                  </div>
                  <div class="col-sm-6">
                    <label>TIPO</label>
                    <input type="text" name="tipo" class="form-control">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <label>DESCRIPCION</label>
                    <input type="text" name="descripcion" class="form-control">
                  </div>
                  <div class="col-sm-6">
                  <label>PRECIO</label>
                    <input type="number" name="precio" class="form-control">
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