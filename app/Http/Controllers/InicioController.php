<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
    //Función que dirige al index
    public function index()
    {
        return view('inicio');
    }
}