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

    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'sometime|max:255',
            'email' => 'sometime|email|unique:users,email,' . Auth::$id,
            'password' => 'sometimes|min:8',
        ]);
        $user=Auth::user();
        $user->update([
            'nome' => $request->nome,
            'email' => $request->email,
            'password' => $request->password ? bcrypt($request->password) : $user->password,
        ]);

        return redirect()->route('/home_login')->with('success', 'Post updated successfully.');
    }


}
