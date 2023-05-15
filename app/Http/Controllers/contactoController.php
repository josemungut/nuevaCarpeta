<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contactoController extends Controller
{
    public function index($nombre,$edad){
        return view('miapp.contactos')->with('nombre',$nombre)->with('edad',$edad);
    }
}
