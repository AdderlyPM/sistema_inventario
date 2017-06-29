<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AlmacenFormRequest;
use App\Almacen;

class AlmacenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $almacenes = \App\Almacen::get();
        return view('sysadmin/almacen.index', compact('almacenes'));
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
    public function store(AlmacenFormRequest $request)
    {
        $almacen =  new Almacen();
        
        $almacen['descripcion'] = $request->input('descripcion');
        $almacen['slug'] = str_slug($request->input('descripcion'));
        $almacen['estado'] = $request->input('estado');
        $almacen->save();

        return redirect()->back()->with('status','Almacén creado con éxtio');
        

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
        $almacen = \App\Almacen::where('slug',$slug)->first();
        return view('sysadmin/almacen.edit', compact('almacen'));
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

        $almacen = \App\Almacen::find($id);
        $almacen['descripcion'] = $request->input('descripcion');
        $almacen['slug'] = str_slug($request->input('descripcion'));
        $almacen['estado'] = $request->input('estado'); 
        
        $almacen->update();

        return redirect("/almacen"."/".str_slug($request->input('descripcion')).'/edit')->with('status', 'Actualizado con éxtio');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        \App\Almacen::where('slug', $slug)->delete();
        return redirect()->back()->with('status', 'Eliminado correctamente');
    }
}
