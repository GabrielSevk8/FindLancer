<?php

use App\Http\Controllers\CadastroController;
use App\Http\Controllers\GoogleAuthController;
use App\Http\Controllers\LoginController;# importando a classe Controller
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

//rota: home
Route::get('/', function ()
{
    return view('Index');
});

//rota;:login
Route::get('/login', function ()
{
    return view('login');
})->name('login');

//Login Social
Route::get('/auth/google',[GoogleAuthController::class, 'redirectToProvider']);
//Route::get('/auth/google/callback',[GoogleAuthController::class, 'autenticaCallBack']);

//validação de login
Route::post('/valida', [LoginController::class, 'Login'])->name('valida');

//logout de uma conta
Route::get('/logout', [LoginController::class,'Sair'])->name('logout');

//rota: Cadastro
Route::get('/cadastro', function ()
{
    return view('cadastro');
});

Route::post('/cadastroUsuario', [CadastroController::class, 'cadastro']);

//rota: Home/Perfil
Route::get('/home_login', function()
{
    return view('home_login');
})->middleware('auth');

Route::get('/home_emp', function()
{
    return view('home_emp');
})->middleware('auth');

Route::get('/pesquisa_vagas', function()
{
    return view('pesquisa_vagas');
});

Route::get('/minhas_vagas', function()
{
    return view ('minhas_vagas');
});

Route::get('/home_emp/criar_vagas', function()
{
    return view('criar_vagas');
});

Route::get('/minhas_vagas', function()
{
    return view('minhas_vagas');
});


//usua
//usuario: mtreutel@gmail.com
//senha: 1234

//faça um código que seja possivel um usuario colocar dados em um input no laravel, e esses mesmos dados são enviados para um Mysql (dados: nome, email, senha)
