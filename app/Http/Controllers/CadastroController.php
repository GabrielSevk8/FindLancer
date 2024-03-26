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

    public function pegaUser( $id )
    {
        $usuario = new User();

        $usuarioEditar = $usuario::where('id','=',$id)->get();

        return view('meus_dados')
        -> with('editar', '')
        -> with('id', $id)
        -> with('usuarioEdit', $usuarioEditar);
    }

    public function alteraUser (Request $request)
    {
        $usuario = User::findOrFail ($id);
        $usuario -> nome = $request->input('name');
        $usuario -> email = $request->input('email');
        $usuario -> password = bcrypt($request->input('senha'));

        $usuario -> save();

        return redirect('/meus_dados');
    }

}
