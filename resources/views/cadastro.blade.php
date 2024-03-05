<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset( 'css/cadastro.css' ) }}">
    <title>Cadastro</title>
    <link rel="shortcut icon" href="{{ asset('image/Findlancer_logo3.png') }}">
</head>
<body>
    <script>
        function validarSenha() {
            var senha = document.getElementById("senha").value;
            var confirmarSenha = document.getElementById("confirmarSenha").value;

            if (senha !== confirmarSenha) {
                alert("As senhas não coincidem. Por favor, tente novamente.");
                return false;
            }

            return true;
        }
    </script>
</head>
<body>

    <h1>Cadastro</h1>

    <div class="bigbox">
        <div class="fundo" id="imgCavalo">
            <img src="{{ asset( 'image/FindlancerCavalo.png' ) }}" alt="">
        </div>

        <div class="container">
            <form action="/submit_form" method="post" onsubmit="return validarSenha()">

            <form action="/submit_form" method="post" onsubmit="return validarFormulario()">

                <div class="box">
                    <label for="usuario">Usuário:</label>
                    <input type="text" id="usuario" name="usuario" required>
                </div>

                <div class="box">
                    <label for="email">E-mail:</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="box">
                    <label for="senha">Senha:</label>
                    <input type="password" id="senha" name="senha" required>
                </div>

                <div class="box">
                    <label for="confirmarSenha">Confirme sua Senha:</label>
                    <input type="password" id="confirmarSenha" name="confirmarSenha" required>
                </div>

                <div class="boxEscolha">
                    <input type="radio" id="free" name="escolha" value="Freelancer">
                    <label class="free" for="free">Freelancer</label>
                    <input type="radio" id="emp" name="escolha" value="Empresa">
                    <label class="emp" for="emp">Empresa</label>
                </div>

                <div class="box" id="btnCad">
                    <button type="submit">Cadastrar</button>
                </div>

            </form>
        </div>

        <div class="fundo" id="imgNome">
            <img src="{{ asset( 'image/FindlancerNome.png' ) }}" alt="">
        </div>
    </div>

    <script>
        function validarFormulario() {
            var senha = document.getElementById("senha").value;
            var confirmarSenha = document.getElementById("confirmarSenha").value;

            if (senha !== confirmarSenha) {
                alert("As senhas não coincidem. Por favor, tente novamente.");
                return false;
            }

            return true;
        }
    </script>

    </form>


</body>
</html>

