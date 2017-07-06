<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $uri = collect([$request->segment(0),$request->segment(1)]);
        $uri = $uri->filter()->all();

        $transacciones = \App\Transaccion::get();
        $articulo = \App\Articulo::get();
        $tipos_inventarios = \App\TiposInventario::get();

        return view('home', compact('transacciones','articulo','tipos_inventarios','uri'));
    }
}
