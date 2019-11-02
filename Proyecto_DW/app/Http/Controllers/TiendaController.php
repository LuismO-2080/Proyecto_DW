<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Auth;
use App\tienda;

class TiendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $tienda=tienda::all();
        return view ("tiendas.index",compact("tienda"));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("tiendas.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    $tienda = new tienda;
    $tienda->tienda = $request->tienda;
    $tienda->nombre = $request->nombre;
    $tienda->nit = $request->nit;
    $tienda->encargado_id = $request->encargado_id;
    $tienda->ubicacion = $request->ubicacion;
    $tienda->capacidad = $request->capacidad;
    $tienda->save();

    return view("tiendas.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function show()
    {
       //;
    }

    public function list()
    {
        $tienda=tienda::all();
        return view("tiendas.list",compact("tienda"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


      public function edit($id)
    {
        $tienda=tienda::findOrFail($id);
        return view ("tiendas.edit",compact("tienda"));
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
        $tienda=tienda::findOrFail($id);
        $tienda->update($request->all());
        return redirect("/tienda");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tienda=tienda::findOrFail($id);
        $tienda->delete();
        return redirect("/tienda");
    }
}
