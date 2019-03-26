<?php

namespace App\Http\Controllers;

use App\donacion;
use Illuminate\Http\Request;

class donacionController extends Controller
{
    public function index(){
      $donacion= donacion::select('cennombre','centelefono');
      return view('donacion.donacion', compact('donacion'));
    }
}
