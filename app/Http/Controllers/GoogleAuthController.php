<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class GoogleAuthController extends Controller
{
    public function redirectToProvider()
    {
        //redireciona para a página de login do Google
        return Socialite::driver('google') -> redirect();
    }

    public function autenticaGoogle()
    {
        //pega os dados do usuário do google
        $userGoogle = Socialite::driver('google')->user;

        //checa se o e-mail usado no Google está no nosso DB
        $usuario = User::where('email', $userGoogle -> getEmail() -> first());

        //se não está cadastrado o email do Google cadastre um novo usuário
        if(!$usuario)
        {
            $user = User::create([
                'nome' => $userGoogle -> getname(),
                'email' => $userGoogle -> getEmail(),
                'password' => bcrypt( str_random(16)),
            ]);


        }

        #fazer o login do usuário (autorizar a entrada)
        Auth::login($usuario, true);

        #redirecionar ao painel
        return redirect('/home_login');
    }

    public function logoutGoogle()
    {

    }


}
