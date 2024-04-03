<?php

use App\Http\Controllers\CadastraVagaController;
use App\Http\Controllers\CadastroController;
use App\Http\Controllers\GoogleAuthController;
use App\Http\Controllers\LoginController;# importando a classe Controller
use App\Http\Controllers\PesquisaController;
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
Route::post('/valida', [LoginController::class, 'login'])->name('valida');

//logout de uma conta
Route::get('/logout', [LoginController::class,'Sair'])->name('logout');

//rota: Cadastro
Route::get('/cadastro', function ()
{
    return view('cadastro');
});

//rota: Criar Cadastro
Route::post('/cadastroUsuario', [CadastroController::class, 'cadastro']);


//rota: Home/Perfil
Route::get('/home_login', [PesquisaController::class, 'pesquisar5Vagas'])->middleware('auth');

Route::get('/home_emp', function()
{
    return view('home_emp');
})->middleware('auth');

//rota: pesquisa vaga
Route::post('/pesquisa_vagas', [PesquisaController::class,"pesquisarVagas"]);

//rota: cadastrar vagas
Route::post('/cadastro_vagas', [CadastraVagaController::class, "CadastrarVagas"]);

Route::get('/minhas_vagas', function()
{
    return view ('minhas_vagas');
})->middleware('auth');

Route::get('/cadastro_vagas', function()
{
    return view('cadastro_vagas');
})->middleware('auth');

Route::get('/meus_dados', function()
{
    return view ('meus_dados');
})->middleware('auth');


Route::post('/atualizar', [CadastroController::class, 'atualizar']);
Route::post('/pega_user', [CadastroController::class, 'pegaUser']);

//rotas: painel de usuarios
Route::get('/painel_usuarios', [CadastroController::class ,'index']);
Route::get('/painel_usuarios/edicao_usuario/{id}', [CadastroController::class ,'pegaUserEditar']);
Route::get('/painel_usuarios/deleta_usuario/{id}', [CadastroController::class, 'deletar']);

Route::get('/home_login/meus_dados/{id}', [CadastroController::class ,'pegaUserEditar']);

