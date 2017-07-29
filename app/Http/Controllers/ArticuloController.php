<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ArticuloFormRequest;

class ArticuloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articulos = \App\Articulo::get();
        $tipos_inventarios = \App\TiposInventario::where('estado',1)->get();

        return view('sysadmin/articulo.index', compact('articulos', 'tipos_inventarios'));
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
    public function store(ArticuloFormRequest $request)
    {
        $articulo = new \App\Articulo();
        $articulo['descripcion'] = $request->input('descripcion');
        $articulo['slug'] = str_slug($request->input('descripcion'));
        $articulo['existencia'] = $request->input('existencia');
        $articulo['id_tipo_inventario'] = $request->input('id_tipo_inventario');
        $articulo['costo_unitario'] = $request->input('costo_unitario');
        $articulo['estado'] = $request->input('estado');
        $articulo->save();

        return redirect()->back()->with('status','Artículo creado con éxtio');        
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
        $articulo = \App\Articulo::where('slug',$slug)->first();
        $tipos_inventarios = \App\TiposInventario::where('estado',1)->get();
        return view('sysadmin/articulo.edit', compact('articulo','tipos_inventarios'));
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
        $articulo = \App\Articulo::find($id);
        $articulo['descripcion'] = $request->input('descripcion');
        $articulo['slug'] = str_slug($request->input('descripcion'));
        $articulo['existencia'] = $request->input('existencia');
        $articulo['id_tipo_inventario'] = $request->input('id_tipo_inventario');
        $articulo['costo_unitario'] = $request->input('costo_unitario');
        $articulo['estado'] = $request->input('estado');
        $articulo->update();

        return redirect("/articulo"."/".str_slug($request->input('descripcion')).'/edit')->with('status', 'Actualizado con éxtio');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        \App\Articulo::where('slug', $slug)->delete();
        return redirect()->back()->with('status', 'Eliminado correctamente');
    }
}
