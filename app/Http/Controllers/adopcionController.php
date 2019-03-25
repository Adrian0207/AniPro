<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adopcionController extends Controller
{
    public function index(Request $request){
      $perro = $request->input('perro');
      $gato = $request->input('gato');

        if(!$perro == null)
            return view('adopcion.adopcionPerros');
        elseif (!$gato==null)
            return view('adopcion.adopcionGatos');
    }

}
