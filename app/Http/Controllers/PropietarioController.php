<?php

namespace App\Http\Controllers;

use App\Models\Propietario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PropietarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Propietario::all();

        return view('propietarios.index', compact('rows'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('propietarios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $row = new Propietario();
        $row->nombre = $request->nombre;
        $row->apellido = $request->apellido;
        $row->correo = $request->correo;
        $row->direccion = $request->direccion;
        $row->telefono = $request->telefono;
        $row->cuenta_bancaria = $request->cuenta_bancaria;
        $row->save();
        return redirect()->route('propietarios.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Propietario  $propietario
     * @return \Illuminate\Http\Response
     */
    public function show(Propietario $propietario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Propietario  $propietario
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $propietarioRow = Propietario::find($id);
        return view('propietarios.edit', compact('propietarioRow'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Propietario  $propietario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Propietario $propietario)
    {
        $row = DB::table('propietarios')
        ->where('id', $request->id)
        ->update(['nombre'=> $request->nombre, 'apellido'=> $request->apellido, 'correo'=> $request->correo, 'direccion'=> $request->direccion, 'telefono'=> $request->telefono, 'cuenta_bancaria'=> $request->cuenta_bancaria ]);
        return redirect()->route('propietarios.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Propietario  $propietario
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = DB::table('propietarios')->where('id', '=', $id)->delete();
        return back();
    }
}
