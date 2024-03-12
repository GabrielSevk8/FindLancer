<?php

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
    return view('index');
});


//rota;:login
Route::get('/login', function ()
{
    return view('login');
})->name('login');

Route::post('/valida', [LoginController::class, 'Login'])->name('valida');

Route::get('/logout', [LoginController::class,'sair'])->name('logout');

//rota: Cadastro
Route::get('/cadastro', function ()
{
    return view('cadastro');
});

//rota: Home/Perfil
Route::get('/home_login', function()
{
    return view('home_login');
})->middleware('auth');

/*)->middleware('auth')->name('homeLogin');*/
