<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\Usuario1Controller;
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

//rota: home
Route::get('/', function ()
{
    return view('index');
});


//rota;:login
Route::get('/login', function ()
{
    return view('login');
})->name('login');

Route::post('/valida', [LoginController::class, 'Login'])->name('valida');

//rota: Cadastro
Route::get('/cadastro', function ()
{
    return view('cadastro');
});

Route::get('/usuario', function ()
{
    return view('usuario');
});

//rota: atualiza cadastro
Route::get('/home/atualizaCadastro', function()
{
    return view('atualiza_cadastro');
});

//rota: Home/Perfil
Route::get('/homeLogin', function()
{
    return view('home_login');
});

route::get('/teste', [Usuario1Controller::class, 'cadastrar']);

/*)->middleware('auth')->name('homeLogin');*/
