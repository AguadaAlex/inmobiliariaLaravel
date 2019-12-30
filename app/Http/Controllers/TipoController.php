<?php

namespace App\Http\Controllers;

use App\Tipo;
use Illuminate\Http\Request;

class TipoController extends Controller
{
            public function __construct()
        {
            $this->middleware('auth');
        }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $usuarioEmail = auth()->user()->email;
        $tipos = Tipo::paginate(3);
        return view('tipos.lista',compact('tipos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tipos.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tipo = new Tipo();
    $tipo->nombre = $request->nombre;

    // $nota->usuario = auth()->user()->email;
    $tipo->save();

    return back()->with('mensaje', 'tipo Agregado!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipo = Tipo::findOrFail($id);
        return view('tipos.editar', compact('tipo'));
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
        $tipoActualizado = Tipo::find($id);
        $tipoActualizado->nombre = $request->nombre;

        $tipoActualizado->save();
    return back()->with('mensaje', 'Tipo editado!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tipoEliminar = Tipo::findOrFail($id);
        $tipoEliminar->delete();

        return back()->with('mensaje', 'Nota Eliminada');
    }
}
