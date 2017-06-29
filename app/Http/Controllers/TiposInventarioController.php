<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
/*use App\Http\Requests\AlmacenFormRequest;*/
use App\TiposInventario;

class TiposInventarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipos_inventarios = \App\TiposInventario::get();
        return view('sysadmin/tipos_inventario.index', compact('tipos_inventarios'));
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
    public function store(Request $request)
    {
        $tipo_inventario =  new TiposInventario();
        
        $tipo_inventario['estado'] = $request->input('estado');
        $tipo_inventario['descripcion'] = $request->input('descripcion');
        $tipo_inventario['slug'] = str_slug($request->input('descripcion'));
        $tipo_inventario['estado'] = $request->input('estado');
        $tipo_inventario['cuenta_contable'] = $request->input('cuenta_contable');
        $tipo_inventario->save();

        return redirect()->back()->with('status','Tipo de inventario crado con éxito');
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
    public function edit($slug)
    {
        $tipo_inventario = \App\TiposInventario::where('slug',$slug)->first();
        return view('sysadmin/tipos_inventario.edit', compact('tipo_inventario'));
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
        $tipo_inventario = \App\TiposInventario::find($id);
        
        $tipo_inventario['descripcion'] = $request->input('descripcion');
        $tipo_inventario['slug'] = str_slug($request->input('descripcion'));
        $tipo_inventario['cuenta_contable'] = $request->input('cuenta_contable');
        $tipo_inventario['estado'] = $request->input('estado'); 
        
        $tipo_inventario->update();

        return redirect("/tipos-inventario"."/".str_slug($request->input('descripcion')).'/edit')->with('status', 'Actualizado con éxtio');        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        \App\TiposInventario::where('slug', $slug)->delete();
        return redirect()->back()->with('status', 'Eliminado correctamente');
    }
}
