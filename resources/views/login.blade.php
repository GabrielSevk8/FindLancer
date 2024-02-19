<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset("css/login.css") }}">
    <title>Login</title>

    <style>

    </style>

</head>
<body class="container">

    <img class="logo" src={{ asset('image/Findlancer_logo3.png') }} alt="">

    <div class="movi">
        <form action="">

            <h1>Login</h1>

                <div>

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

                    <div>
                        <input class="entrar" type="submit" name="entrar" id="entrar" value="Logar no Sistema">
                    </div>


                </div>

        </form>
    </div>
</body>
</html>
