<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class CadastroController extends Controller
{
    public function cadastro(Request $request)
    {
        # objeto da classe User
        $usuario = new User();

        # enviando os valores
        $usuario -> nome = $request->input('name');
        $usuario -> email = $request->input('email');
        $usuario -> password = bcrypt($request->input('senha'));
        $usuario -> choose = $request->input('choose');

        # cadastra os dados no banco
        $usuario -> save();

        return redirect('/login');
    }
}
