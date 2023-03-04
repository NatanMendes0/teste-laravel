<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class carroController extends Controller
{
    public function funcao()
    {
        $carro = ["Fusca", "Gol", "Palio", "Uno"];
        return view('carroForm', compact('carro'));;
    }
}
