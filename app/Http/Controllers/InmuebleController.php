<?php

namespace App\Http\Controllers;

use App\Models\Inmueble;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InmuebleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Inmueble::all();
        return view('inmuebles.index', compact('rows'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('inmuebles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $row = new Inmueble();
        $row->direccion = $request->direccion;
        $row->tipo = $request->tipo;
        $row->descripcion = $request->descripcion;
        $row->precio = $request->precio;
        $row->save();
        return redirect()->route('inmuebles.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Inmueble  $inmueble
     * @return \Illuminate\Http\Response
     */
    public function show(Inmueble $inmueble)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Inmueble  $inmueble
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $inmuebleRow = Inmueble::find($id);
        return view('inmuebles.edit', compact('inmuebleRow'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Inmueble  $inmueble
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inmueble $inmueble)
    {
        $row = DB::table('inmuebles')
        ->where('id', $request->id)
        ->update(['direccion'=> $request->direccion, 'tipo'=> $request->tipo, 'descripcion'=> $request->descripcion, 'precio'=> $request->precio ]);
        return redirect()->route('inmuebles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Inmueble  $inmueble
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = DB::table('inmuebles')->where('id', '=', $id)->delete();
        return back();
    }
}
