<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function show($id=2){
        return "Mostrando a categoria {$id}"; // Mostra a categoria 2
    }

    public function teste(){
        $nome = 'Natan';
        $sobrenome = 'Mendes';
        return view('teste', ['nome' => $nome, 'sobrenome' => $sobrenome ]); // Mostra a view teste
        //return view('teste', compact('nome', 'sobrenome')); // 2º meio de mostrar a view teste
    }

    public function formulario(){
        return view('exemploForm'); // Mostra a view exemploForm
    }

    public function store(Request $request){
        $dataForm = $request->except('_token'); // Remove o token do array, exibindo apenas os dados do array
        return $dataForm;
    }
}
