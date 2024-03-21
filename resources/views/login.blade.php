<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset("css/login.css") }}">
    <link rel="shortcut icon" href="{{ asset('image/iconSite.png') }}">
    <title>Login</title>
</head>
<body>

    <div class="container">
        <div class="effect">
            <div class="movi">
                <form action="/valida" method="POST">
                    @csrf
                    <h1>Login</h1>

                        <div class="conteudo">

                            <div class="entraDados">
                                <label for="email">E-mail</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="" required>
                            </div>

                            <div class="entraDados">
                                <label for="senha">Senha</label>
                                <input type="password" class="form-control" name="password" id="senha" placeholder="">
                            </div>

                            <div class="b">
                                <div>
                                    <a class="links" href="/cadastro">Criar uma conta</a>
                                </div>
                                <div>
                                    <a class="links" href="#">Esqueci a senha</a>
                                </div>

                            </div>

                            @if(session("error")!='')
                                <div class="error">
                                    <p>{{ session("error") }}</p>
                                </div>
                            @endif

                            <div class="buttonEntrar">
                                <button type="submit" class="entrar">Login</button>
                            </div>

                            <div >
                                <p class="divisoria">Ou</p>
                            </div>

                            <div class="tokens">



                            </div>
                        </div>
                </form>

                <div class="moviToken">

                    <button class="token"> <img class="icon1" src="{{ asset('image/google.png') }}" alt=""><a href="/auth/google"><span class="spGoogle">Entre com Google</span></a></button>

                    <button class="token"><img class="icon2" src="{{ asset('image/github.png') }}" alt=""> <span>Entre com GitHub</span></button>

                    <button class="token"><img class="icon3" src="{{ asset('image/linkedin.png') }}" alt=""> <span>Entre com LinkedIn</span></button>

                </div>
            </div>
        </div>
    </div>

    <footer>
        <p> &copy; FindLancer - Todos os Direitos Reservados</p>
    </footer>
</body>
</html>
