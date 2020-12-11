@extends('Layouts.template')

@section('content')
<div class="card shadow mb-4">
            <div class="card-header py-3">
            <h1 class="m-0 font-weight-bold text-primary">LISTADO DE PAGOS</h1>
              <a href="{{route('pagos.create')}}" class="btn btn-primary btn-circle">
                        <i class="fas fa-plus-square"></i>
                        </a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>FECHA</th>
                      <th>VALOR</th>
                      <th>TOTAL PAGADO</th>
                      <th>COMENTARIOS</th>
                      <th>EDITAR</th>
                      <th>BORRAR</th>
                 </tr>
                  </thead>
                  <tbody>
                  @foreach($rows as $row)
                        <tr>
                        <td>{{$row->Fecha}}</td>
                        <td>{{$row->valor}}</td>
                        <td>{{$row->total_pagado}}</td>
                        <td>{{$row->comentarios}}</td>
                        <td>
                        <a href="{{route('pagos.edit', $row->id)}}" class="btn btn-success btn-circle">
                        <i class="fas fa-edit"></i>
                        </a>
                        </td>
                        <td>
                        <form action="{{route('pagos.destroy', $row->id)}}" method="post">
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
