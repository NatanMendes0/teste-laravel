<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController; // Importa o controller
use App\Http\Controllers\carroController; // Importa o controller

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return "Hello word com Laravel";
});

Route::get('/olaUsuario', function () {
    return "Olá usuário!";
});

Route::get('/categoria/{id?}', [CategoriaController::class, 'show']); // Chama o método show do controller

Route::get ('/teste', [CategoriaController::class, 'teste']); // Chama o método teste do controller

//para acessar o formulario, precisamos primeiro declarar a rota por get, depois, o controller chamará o html formulario, que chamará a rota por post
Route::get('/exemplo', [CategoriaController::class, 'formulario']);

Route::post('/produto', [CategoriaController::class, 'store']);

Route::get('/carro', [carroController::class, 'funcao']);
?>