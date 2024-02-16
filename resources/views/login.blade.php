<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset("css/login.css") }}">
    <title>Login</title>

    <style>

    </style>

</head>
<body>

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
                        <a class="links" href="#">Criar uma conta</a>
                        <a class="links" href="#">Esqueci a senha</a>
                    </div>

                    <input class="" type="submit" name="entrar" id="entrar" value="Logar no Sistema">

                </div>

        </form>
    </div>
</body>
</html>
