<?php

namespace App\Http\Controllers;

use App\Models\Vaga;
use Illuminate\Http\Request;

class PesquisaController extends Controller
{

    public function pesquisarTodasVagas()
    {
        $vagas = new Vaga();

        $todasVagas = $vagas::all();
        return view('/home_login', compact('todasVagas'));

    }

    public function pesquisar5Vagas()
    {
        $vagas = new Vaga();

        $todasVagas = $vagas::all()->take(4);
        return view('/home_login', compact('todasVagas'));

    }

    public function pesquisarVagas(Request $request)
    {

        $vagas = new Vaga();

        //$todasVagas = $vagas::all();
        $todasVagas=$vagas::where( 'titulo_vaga', 'like', "%$request->pesquisa%")->get();

        return view('pesquisa_vagas', compact('todasVagas'));

    }
}

