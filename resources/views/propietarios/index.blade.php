@extends('Layouts.template')

@section('content')
<div class="card shadow mb-4">
            <div class="card-header py-3">
            <h1 class="m-0 font-weight-bold text-primary">LISTADO DE PROPIETARIOS</h1>
              <a href="{{route('propietarios.create')}}" class="btn btn-primary btn-circle">
                        <i class="fas fa-plus-square"></i>
                        </a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>NOMBRE</th>
                      <th>APELLIDO</th>
                      <th>CORREO</th>
                      <th>DIRECCION</th>
                      <th>TELEFONO</th>
                      <th>CUENTA BANCARIA</th>
                      <th>EDITAR</th>
                      <th>ELIMINAR</th>
                 </tr>
                  </thead>
                  <tbody>
                  @foreach($rows as $row)
                        <tr>
                        <td>{{$row->nombre}}</td>
                        <td>{{$row->apellido}}</td>
                        <td>{{$row->correo}}</td>
                        <td>{{$row->direccion}}</td>
                        <td>{{$row->telefono}}</td>
                        <td>{{$row->cuenta_bancaria}}</td>
                        <td>
                        <a href="{{route('propietarios.edit', $row->id)}}" class="btn btn-success btn-circle">
                        <i class="fas fa-edit"></i>
                        </a>
                        </td>
                        <td>
                        <form action="{{route('propietarios.destroy', $row->id)}}" method="post">
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
