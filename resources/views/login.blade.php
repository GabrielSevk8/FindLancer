<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset("css/login.css") }}">
    <title>Login</title>
</head>
<body class="container">

    <img class="logo" src={{ asset('image/Findlancer_logo.jpg') }} alt="">

    <div class="movi">
        <form action="">

            <h1>Login</h1>

                <div class="conteudo">

                    <div class="entraDados">
                        <label for="email">E-mail</label>
                        <input type="email" class="form-control" id="email" placeholder="" required>
                    </div>

                    <div class="entraDados">
                        <label for="senha">Senha</label>
                        <input type="password" class="form-control" id="senha" placeholder="">
                    </div>

                    <div class="b">
                        <div>
                            <a class="links" href="#">Criar uma conta</a>
                        </div>
                        <div>
                            <a class="links" href="#">Esqueci a senha</a>
                        </div>

                    </div>

                    <div class="buttonEntrar">
                        <button class="entrar">Login</button>
                    </div>

                    <div >
                        <p class="divisoria">Ou</p>
                    </div>

                    <div class="tokens">

                        <button class="token"><img class="icon1" src="{{ asset('image/google.png') }}" alt=""> <span>Entre com Google</span> </button>

                        <button class="token"><img class="icon2" src="{{ asset('image/linkedin.png') }}" alt=""> <span>Entre com GitHub</span></button>

                        <button class="token"><img class="icon3" src="{{ asset('image/github.png') }}" alt=""> <span>Entre com LinkedIn</span></button>

                    </div>

                </div>

        </form>

    </div>
</body>
</html>
