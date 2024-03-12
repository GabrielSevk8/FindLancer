<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function Login(Request $dadosLogin)
    {

        $credenciais = $dadosLogin->only('email','password');

        if( Auth::attempt( $credenciais))
        {
            return redirect() -> intended("home_login");
        }
        else
        {
            return back()->with( "error", "Usuário ou senha incorretos!");
        }

        


    }

    public function sair()
    {
        Auth::logout();

       //$sessao->session->invalidate();

       //$sessao->session->regenerateToken();

        return redirect("login");
    }
}
