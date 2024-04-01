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

    public function index()
    {
        $itens = $this->recuperaTodos();
        # retorna a view com os dados encontrados
        return view("painel_usuarios", compact("itens" ) );
    }
    public function recuperaTodos()
    {
        # instância da classe de usuários (model)
        $usuarios = new User();

        # trazendo todos os usuários
        # SQL - SELECT * FROM usuarios
        # dd( $usuarios::all() );

        #trazendo um usuário específico (WHERE)
        # SQL - SELECT * FROM usuarios WHERE id = 5
        # dd($usuarios::where( 'id', '=', 5)->get());

        # trazendo direto pela posição (terceiro item na tabela)
        # dd($usuarios::find(3));

        $itens = $usuarios::all();
        # retorna os valores encontrados
        return $itens;
    }

    public function pegaUserEditar( $id )
    {
        //$id = $request->query('id');

        $usuario = new User();

        $usuarioEditar = $usuario::where('id','=', $id )->get();

        return view('edicao_usuario', compact('usuarioEditar'));
    }

    public function pegaUserDeletar( $id )
    {
        //$id = $request->query('id');

        $usuario = new User();

        $usuarioDeletar= $usuario::where('id','=', $id )->get();

        return view('deleta_usuario', compact('usuarioDeletar'));
    }



    /*public function alteraNome(Request $request)
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
    }*/

    public function atualizar(Request $request){

        $usuario = new User();

        if( $request->password == "")
        {

            $usuario::where('id',$request->id)->update([
                'nome' => $request->nome,
                'email'=>$request->email
            ]);
        }
        else
        {
            $usuario::where('id',$request->id)->update([
                'nome' => $request->nome,
                'email'=>$request->email,
                'password'=>bcrypt($request->password),
            ]);
        }

        return redirect("/painel_usuarios");
    }

    public function deletar( $id )
    {

        $usuario = new User();

        $usuario = User::findOrFail($id);
        $usuario -> delete();

        return redirect("/painel_usuarios");
    }

}
