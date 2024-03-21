<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/cadastro_vagas" method="POST">
        @csrf
        <label for="tituloVaga">Titulo da Vaga</label>
        <input type="text" name="tituloVaga">

        <label for="categoriaVaga">Categoria da Vaga</label>
        <input type="text" name="categoriaVaga">


        <label for="nomeEmpresa">Nome da Empresa</label>
        <input type="text" name="nomeEmpresa">

        <label for="salario">Salário</label>
        <input type="number" name="salario"salario min="0">

        <label for="descricao">Descrição da Vaga</label>
        <input type="text" name="descricao">

        <button type="submit"> Cadastrar </button>

    </form>
</body>
</html>
