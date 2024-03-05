<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class CadastroController extends Controller
{
    public function cadastrar(Request $request)
    {
        // Validar os dados recebidos, etc.

        if ($tipoUsuario === 'free')
        {
        // Criar um novo objeto de usuário com os dados do formulário
        $usuario = new Usuario();
        $usuario->usuario = $request->input('usuario');
        $usuario->email = $request->input('email');
        $usuario->senha = $request->input('senha');

        // Salvar o usuário no banco de dados
        $usuario->save();
        }
        elseif($tipoUsuario === 'emp')
        {

            $usuario = new Usuario();
            $usuario->usuario = $request->input('usuario');
            $usuario->email = $request->input('email');
            $usuario->senha = $request->input('senha');

            $usuario->save();
        }
    }
}
