<?php

namespace App\Http\Controllers;

use App\Models\Facturacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FacturacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Facturacion::all();
        return view('facturacions.index', compact('rows'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('facturacions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $row = new Facturacion();
        $row->mes_a_pagar = $request->mes_a_pagar;
        $row->concepto = $request->concepto;
        $row->valor = $request->valor;
        $row->deducciones = $request->deducciones;
        $row->total_pagar = $request->total_pagar;
        $row->save();
        return redirect()->route('facturacions.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Facturacion  $facturacion
     * @return \Illuminate\Http\Response
     */
    public function show(Facturacion $facturacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Facturacion  $facturacion
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $facturacionRow = Facturacion::find($id);
        return view('facturacions.edit', compact('facturacionRow'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Facturacion  $facturacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Facturacion $facturacion)
    {
        $row = DB::table('facturacions')
        ->where('id', $request->id)
        ->update(['mes_a_pagar'=> $request->mes_a_pagar, 'concepto'=> $request->concepto, 'valor'=> $request->valor, 'deducciones'=> $request->deducciones, 'total_pagar'=> $request->total_pagar ]);
        return redirect()->route('facturacions.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Facturacion  $facturacion
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = DB::table('facturacions')->where('id', '=', $id)->delete();
        return back();
    }
}
