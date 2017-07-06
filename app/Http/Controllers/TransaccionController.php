<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TransaccionFormRequest;

class TransaccionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transacciones = \App\Transaccion::get();
        $articulo = \App\Articulo::get();
        return view('sysadmin/transaccion.index',compact('transacciones','articulo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TransaccionFormRequest $request)
    {
        $transaccion = new \App\Transaccion();
        $transaccion['tipo_transaccion'] = $request->input('tipo_transaccion');
        $transaccion['id_articulo'] = $request->input('id_articulo');
        $transaccion['fecha'] = $request->input('fecha');
        $transaccion['cantidad'] = $request->input('cantidad');
        $transaccion['monto'] = $request->input('monto');

        $transaccion->save();

        return redirect()->back()->with('status','Transacción creado con éxtio');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $transaccion = \App\Transaccion::where('id',$id)->first();
        $articulo = \App\Articulo::get();
        return view('sysadmin/transaccion.edit', compact('transaccion','articulo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $transaccion = \App\Transaccion::find($id);
        $transaccion['tipo_transaccion'] = $request->input('tipo_transaccion');
        $transaccion['id_articulo'] = $request->input('id_articulo');
        $transaccion['fecha'] = $request->input('fecha');
        $transaccion['cantidad'] = $request->input('cantidad');
        $transaccion['monto'] = $request->input('monto');        

        $transaccion->update();
        return redirect("/transaccion"."/".$id.'/edit')->with('status', 'Actualizado con éxtio');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        \App\Transaccion::where('id', $id)->delete();
        return redirect()->back()->with('status', 'Eliminado correctamente');
    }
}
