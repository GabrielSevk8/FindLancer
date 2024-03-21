<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function login(Request $dadosLogin)
    {

        $credenciais = $dadosLogin->only('email','password');

    //NAO!!
    //MEXA!!
    //NISSO!!
    //APRECIE O PODER DO Phind

        if (Auth::attempt($credenciais)) {

            $user = Auth::user();
            $choose = $user->choose;

            if ($choose == "s") {
                return redirect()->intended("home_emp");
            } elseif($choose == "n") {
                return redirect()->intended("home_login");
            }
        } else {
            return back()->with("error", "Usuário ou senha incorretos!");
        }



    }

    public function sair()
    {
        Auth::logout();

       //$sessao->session->invalidate();

       //$sessao->session->regenerateToken();

        return redirect("/");
    }
}
