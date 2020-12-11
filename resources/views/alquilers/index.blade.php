@extends('Layouts.template')

@section('content')
<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h1 class="m-0 font-weight-bold text-primary">LISTADO DE ALQUILERES</h1>
              <a href="{{route('alquilers.create')}}" class="btn btn-primary btn-circle">
                        <i class="fas fa-plus-square"></i>
                        </a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>PRECIO ALQUILER</th>
                      <th>FORMA PAGO</th>
                      <th>FECHA INICIO</th>
                      <th>FECHA FIN</th>
                      <th>EDITAR</th>
                      <th>ELIMINAR</th>
                 </tr>
                  </thead>
                  <tbody>
                  @foreach($rows as $row)
                        <tr>
                        <td>{{$row->precio_alquiler}}</td>
                        <td>{{$row->forma_pago}}</td>
                        <td>{{$row->fecha_inicio}}</td>
                        <td>{{$row->fecha_fin}}</td>
                        <td>
                        <a href="{{route('alquilers.edit', $row->id)}}" class="btn btn-success btn-circle">
                        <i class="fas fa-edit"></i>
                        </a>
                        </td>
                        <td>
                        <form action="{{route('alquilers.destroy', $row->id)}}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger btn-circle">
                        <i class="fas fa-trash"></i>
                        </button>
                        </form>
                        </td>
                        </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
@endsection
