<?php

namespace App\Http\Controllers;
use App\adopcion;
use Illuminate\Http\Request;

class adopcionController extends Controller
{
    public function index(Request $request){
      $perro = $request->input('perro');
      $gato = $request->input('gato');

        if(!$perro == null){
            $perros=adopcion::select('mascodigo','masnombre','masraza')->where('tipcodigo','=',$perro)->get();
            return view('adopcion.adopcionPerros',compact('perros'));
        }
        elseif (!$gato==null){
            $gatos=adopcion::select('mascodigo','masnombre','masraza')->where('tipcodigo','=',$gato)->get();
            return view('adopcion.adopcionGatos',compact('gatos'));
        }
    }

    public function viewPerro($cod){
        $mascota = adopcion::where('mascodigo', $cod)->first();
        return view('adopcion.adopcionViewPerro', compact('mascota'));
    }

    public function viewGato($cod){
        $mascota = adopcion::where('mascodigo', $cod)->first();
        return view('adopcion.adopcionViewGato', compact('mascota'));
    }

}
