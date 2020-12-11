<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Venta::all();

        return view('ventas.index', compact('rows'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ventas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $row = new Venta();
        $row->precio = $request->precio;
        $row->Forma_pago = $request->Forma_pago;
        $row->nombre_comprador = $request->nombre_comprador;
        $row->correo = $request->correo;
        $row->direccion = $request->direccion;
        $row->telefono = $request->telefono;
        $row->save();
        return redirect()->route('ventas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function show(Venta $venta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ventaRow = Venta::find($id);
        return view('ventas.edit', compact('ventaRow'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Venta $venta)
    {
        $row = DB::table('ventas')
        ->where('id', $request->id)
        ->update(['precio'=> $request->precio, 'Forma_pago'=> $request->Forma_pago, 'nombre_comprador'=> $request->nombre_comprador, 'correo'=> $request->correo, 'direccion'=> $request->direccion, 'telefono'=> $request->telefono ]);
        return redirect()->route('ventas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = DB::table('ventas')->where('id', '=', $id)->delete();
        return back();
    }
}
