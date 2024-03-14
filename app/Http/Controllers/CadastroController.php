<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class CadastroController extends Controller
{
    public function cadastrarUsuario()
    {
        # objeto da classe User
        $usuario = new User();

        # enviando os valores
        $usuario -> name = "Nome do Usuário";
        $usuario -> email = "email do usuário";
        $usuario -> password = "senha do usuário";
        $usuario -> choose = "escolha tipo de usuário";

        # cadastra os dados no banco
        $usuario -> save();

        return "cadastrar usuário";
    }
}
