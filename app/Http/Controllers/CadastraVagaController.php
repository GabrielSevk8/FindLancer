<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vaga;

class CadastraVagaController extends Controller
{
    public function CadastrarVagas(Request $request)
    {
        $vaga = new Vaga();

        $vaga -> categoria = $request->input('categoriaVaga');
        $vaga -> titulo_vaga = $request->input('tituloVaga');
        $vaga -> salario = $request->input('salario');
        $vaga -> nome_empresa = $request->input('nomeEmpresa');
        $vaga -> descricao = $request->input('descricao');

        $vaga -> save();

        return redirect('/home_emp');
    }

}
