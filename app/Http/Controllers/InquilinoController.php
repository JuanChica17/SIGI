<?php

namespace App\Http\Controllers;

use App\Models\Inquilino;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InquilinoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Inquilino::all();

        return view('inquilinos.index', compact('rows'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('inquilinos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $row = new Inquilino();
        $row->nombre_inquilino = $request->nombre_inquilino;
        $row->correo = $request->correo;
        $row->direccion = $request->direccion;
        $row->telefono = $request->telefono;
        $row->estado_civil = $request->estado_civil;
        $row->save();
        return redirect()->route('inquilinos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Inquilino  $inquilino
     * @return \Illuminate\Http\Response
     */
    public function show(Inquilino $inquilino)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Inquilino  $inquilino
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $inquilinoRow = Inquilino::find($id);
        return view('inquilinos.edit', compact('inquilinoRow'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Inquilino  $inquilino
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inquilino $inquilino)
    {
        $row = DB::table('inquilinos')
        ->where('id', $request->id)
        ->update(['nombre_inquilino'=> $request->nombre_inquilino, 'correo'=> $request->correo, 'direccion'=> $request->direccion, 'telefono'=> $request->telefono, 'estado_civil'=> $request->estado_civil ]);
        return redirect()->route('inquilinos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Inquilino  $inquilino
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = DB::table('inquilinos')->where('id', '=', $id)->delete();
        return back();
    }
}
