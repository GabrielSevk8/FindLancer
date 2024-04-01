@section('conteudos')
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title> CRUD com Bootstrap </title>
    <link rel="stylesheet" href="{{('css/painelUsuarios.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="move">
        {{-- Repetição de acordo com os usuários encontrados no DB --}}
        @foreach ($itens as $resultado)
            <div class="container">
                <p>{{ $resultado->nome }} <?php //echo $resultado -> nome; ?></p>
                <div class="conteudo">
                    <p><?php echo $resultado->nome; ?></p>
                    <p>{{ $resultado->email }}</p>
                    <p>
                        <a href="/painel_usuarios/edicao_usuario/{{ $resultado->id }}" class="edit"><i class="material-icons"
                                title="Edit">&#xE254;</i></a>
                        <a href="/painel_usuarios/deleta_usuario/{{ $resultado->id }}" class="delete"><i class="material-icons"
                                title="Delete">&#xE872;</i></a>
                    </p>
                </div>
            </div>
        @endforeach
    </div>


</body>
</html>

