<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\UsuarioController;# importando a classe Controller
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/cadastro', function () {
    return view('cadastro');
});

Route::get('/usuario', function () {
    return view('usuario');
});

Route::get('/home/atualizaCadastro', function()
{
    return view('atualiza_cadastro');
});

Route::get('/homeLogin', function()
{
    return view('home_login');
});
