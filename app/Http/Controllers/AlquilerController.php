<?php

namespace App\Http\Controllers;

use App\Models\Alquiler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AlquilerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Alquiler::all();

        return view('alquilers.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('alquilers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $row = new Alquiler();
        $row->precio_alquiler = $request->precio_alquiler;
        $row->forma_pago = $request->forma_pago;
        $row->fecha_inicio = $request->fecha_inicio;
        $row->fecha_fin = $request->fecha_fin;
        $row->save();
        return redirect()->route('alquilers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Alquiler  $alquiler
     * @return \Illuminate\Http\Response
     */
    public function show(Alquiler $alquiler)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Alquiler  $alquiler
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $alquilerRow = Alquiler::find($id);
        return view('alquilers.edit', compact('alquilerRow'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Alquiler  $alquiler
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alquiler $alquiler)
    {
        $row = DB::table('alquilers')
        ->where('id', $request->id)
        ->update(['precio_alquiler'=> $request->precio_alquiler, 'forma_pago'=> $request->forma_pago, 'fecha_inicio'=> $request->fecha_inicio, 'fecha_fin'=> $request->fecha_fin ]);
        return redirect()->route('alquilers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Alquiler  $alquiler
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = DB::table('alquilers')->where('id', '=', $id)->delete();
        return back();
    }
}
