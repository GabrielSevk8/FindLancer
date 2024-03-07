<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use illuminate\Support\Facades\Auth;

class LoginControl extends Controller
{

    public function Login(Request $dadosLogin)
    {

        $credenciais = $dadosLogin->only('email','password');

        if( Auth::attempt( $credenciais))
        {
            return redirect() -> intented("/painel");
        }
        else
        {
            return back()->with( "error", "Usuário ou senha incorretos!");
        }


    }

    public function sair(Request $dadosLogin)
    {
        Auth::logout();

       // $sessao->session->invalidate();

       // $sessao->session->regenerateToken();

        return redirect("login");
    }
}
