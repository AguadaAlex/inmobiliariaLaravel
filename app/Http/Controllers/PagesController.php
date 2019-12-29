<?php

namespace App\Http\Controllers;

use App\Galeria;
use App\Http\Requests\FiltrarPropiedadesRequest;
use App\Localidad;
use App\Propiedad;
use App\Tipo;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function Home(){
        $tipos = Tipo::all();
        $localidades=Localidad::all();
        // dd($tipos);
        return view('hom',compact('tipos','localidades'));

    }
    public function Store(FiltrarPropiedadesRequest $request){
        //dd($request->all());
        // $this->validate($request,[
        //     'boton'=>'required',
        //     'tipo_id'=>'required',
        //     'localidad_id'=>'required',
        // ]);
        $tipo=$request->get('boton');
        $propiedad=$request->get('propiedad_id');
        $localidad=$request->get('localidad_id');
        $propiedades=Propiedad::where('tipo_id',$propiedad)
        ->where('localidad_id',$localidad)
        ->where('condicion',$tipo)
        ->get();
        //dd($propiedades);
        //MODIFICAR LA BASE DE DATOS

        //return 'store';
        return view('propiedades',compact('propiedades'));
    }
    public function galerias($id = null)
    {
        $galeria = Galeria::where('galeria_id', $id)->get();

        return $galeria;
    }
}
