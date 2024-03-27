<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

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

    public function pegaUser(Request $id )
    {
        $usuario = new User();

        $usuarioEditar = $usuario::where('id','=',$id)->get();

        return view('meus_dados')
        -> with('editar', '')
        -> with('id', $id)
        -> with('usuarioEdit', $usuarioEditar);
    }

    public function alteraNome(Request $request)
    {
        dd('metodo chamado');
        $request->validate([
            'nome' => 'required|string',
        ]);

        $usuario = Usuario::pegaUser($id);
        $usuario->nome = $request->input('nome');
        $usuario->save();


        return view('home_login')->with('success', 'Nome do usuário atualizado com sucesso!');
    }

    public function alteraEmail(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        $usuario = Usuario::findOrFail($id);
        $usuario->email = $request->input('email');
        $usuario->save();

        return redirect()->back()->with('success', 'E-mail do usuário atualizado com sucesso!');
    }

    public function alteraSenha(Request $request)
    {
        $request->validate([
            'senha' => 'required|string|min:6',
        ]);

        $usuario = Usuario::findOrFail($id);
        $usuario->senha = bcrypt($request->input('senha'));
        $usuario->save();

        return redirect()->back()->with('success', 'Senha do usuário atualizada com sucesso!');
    }

}
