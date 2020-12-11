<?php

namespace App\Http\Controllers;

use App\Models\Contrato;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContratoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Contrato::all();
        return view('contratos.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contratos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $row = new Contrato();
        $row->servicio_que_presta = $request->servicio_que_presta;
        $row->valor_comision = $request->valor_comision;
        $row->fecha_inicio = $request->fecha_inicio;
        $row->fecha_fin = $request->fecha_fin;
        $row->save();
        return redirect()->route('contratos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contrato  $contrato
     * @return \Illuminate\Http\Response
     */
    public function show(Contrato $contrato)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contrato  $contrato
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contratoRow = Contrato::find($id);
        return view('contratos.edit', compact('contratoRow'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contrato  $contrato
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contrato $contrato)
    {
        $row = DB::table('contratos')
        ->where('id', $request->id)
        ->update(['servicio_que_presta'=> $request->servicio_que_presta, 'valor_comision'=> $request->valor_comision, 'fecha_inicio'=> $request->fecha_inicio, 'fecha_fin'=> $request->fecha_fin ]);
        return redirect()->route('contratos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contrato  $contrato
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = DB::table('contratos')->where('id', '=', $id)->delete();
        return back();
    }
}
