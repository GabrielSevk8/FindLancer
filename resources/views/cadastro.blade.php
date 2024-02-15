<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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

    <form action="/submit_form" method="post" onsubmit="return validarSenha()">

            <tr>
                <td><label for="usario">Usuário</label></td>
                <td><input type="usuario" id="usuario" name="usuario" required></td>
            </tr>

            <tr>
                <td><label for="email">E-mail:</label></td>
                <td><input type="email" id="email" name="email" required></td>
            </tr>

            <tr>
                <td><label for="senha">Senha:</label></td>
                <td><input type="password" id="senha" name="senha" required></td>
            </tr>

            <tr>
                <td><label for="confirmarSenha">Confirme sua Senha:</label></td>
                <td><input type="password" id="confirmarSenha" name="confirmarSenha" required></td>
            </tr>
            <tr>
                <td><label for="nome">Nome:</label></td>
                <td><input type="text" id="nome" name="nome" required></td>
            </tr>

            <tr>
                <td><label for="birth"> Data de Nascimento:</label></td>
                <td><input type="birth" id="birth" name="birth" required></td>
            </tr>

            <tr>
                <td><label for="cpf">CPF:</label></td>
                <td><input type="cpf" id="cpf" name="cpf" required></td>
            </tr>

            <tr>
                <td><label for="rg">RG:</label></td>
                <td><input type="rg" id="rg" name="rg" required></td>
            </tr>

            <tr>
                <td><label for="estadoCivil">Estado Civil:</label></td>
                <td>
                    <select id="estadoCivil" name="estadoCivil" required>
                        <option value="" disabled selected>Selecione</option>
                        <option value="solteiro">Solteiro</option>
                        <option value="casado">Casado</option>
                        <option value="desquitado">Desquitado</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td><label for="genero">Sexo:</label></td>
                <td>
                    <select id="genero" name="genero" required>
                        <option value="" disabled selected>Selecione</option>
                        <option value="masculino">Masculino</option>
                        <option value="feminino">Feminino</option>
                        <option value="outros">Outros</option>
                    </select>
                </td>
            </tr>

                <td colspan="2"><button type="submit">Cadastrar</button></td>
            </tr>

    </form>

</body>
</html>

