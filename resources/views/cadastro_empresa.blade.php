<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset( 'css/cadastroEmp.css' ) }}">
    <title>Cadastro</title>
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

    <h2>Cadastro de Usuário</h2>
    <div class="bigbox">
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
                    <label for="telefone">Telefone:</label>
                    <input type="text" id="telefone" name="telefone" required>
                </div>
                <div class="box">
                    <label for="senha">Senha:</label>
                    <input type="password" id="senha" name="senha" required>
                </div>
                <div class="box">
                    <label for="confirmarSenha">Confirme sua Senha:</label>
                    <input type="password" id="confirmarSenha" name="confirmarSenha" required>
                </div>
                <div class="box">
                    <label for="nome da empresa">Nome da Empresa:</label>
                    <input type="text" id="nome da empresa" name="nome da empresa" required>

                    <!-- -->

                <div class="box">
                    <label for="CNPJ">CNPJ:</label>
                    <input type="text" id="cnpj" name="cnpj" required>
                </div>
                <div class="box">
                    <label for="razão social">Razão social:</label>
                    <input type="text" id="razão social" name="razão social" required>
                </div>
                <div class="box">
                    <label for="birth">Data de Nascimento:</label>
                    <input type="text" id="birth" name="birth" required>
                </div>
                <div class="box">
                    <label for="cep">CEP:</label>
                    <input type="text" id="cep" name="cep" required>
                </div>
                <div class="box">
                    <label for="endereco">Endereço:</label>
                    <input type="text" id="endereco" name="endereco" required>
                </div>
                <div class="box">
                    <label for="complemento">Complemento:</label>
                    <input type="text" id="complemento" name="complemento">
                </div>
                <div class="box" id="btnCad">
                    <button type="submit">Cadastrar</button>
                </div>
            </form>
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

