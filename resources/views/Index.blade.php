<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset( 'css/index.css' ) }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Index</title>

    <style>
        @font-face{
            font-family: test;
        src: url("font/Palatino Font.ttf");
        }
        {
            font-family: test;
        }
    </style>
</head>
<body>
    <header>
        <div id="lesquerdo" class="ladoHead">

            <h1 class="findNome">FindLancer</h1>
            <a href="#criacaoContas"><h1 class="opcoesHeader">Crie sua Conta</h1></a>
            <a href="#containerClientes"><h1 class="opcoesHeader">Avaliacões dos Clientes</h1></a>

        </div>

        <div id="ldireito" class="ladoHead">
            <a href="/login" class="login">
                <h1>ACESSE SUA CONTA</h1>
            </a>
        </div>
    </header>

    <main>
        <div>
            <div id="imgHero">

            </div>
        </div>


        <div id="criacaoContas">
            <div id="fundoContas">
                <div id="empresa">
                    <p>Para sua</p>
                    <h1>Empresa</h1>

                    <p>Encontre os melhores free-lancers para a sua empresa
                        Use nossos serviços para filtrar e ter as melhores estatísticas
                        para encontrar o melhor funcionário.
                    </p>

                    <button> <a href="/cadastro">Criar Conta Empresa</a></button>
                </div>
                <div id="cliente">
                    <p>Para</p>
                    <h1>Você</h1>
                    <p>Veja vagas destinadas ao seu perfil como free-lancer,
                        utilize nossos filtros para buscara vaga ideal, usando
                        uma interface fácil de intuitiva.
                    </p>
                    <button><a href="/cadastro">Criar Conta Empresa</a></button>
                </div>
            </div>

        </div>


        <div id="containerClientes">
            <h1 id="tituloClientes">O que estão dizendo da FindLancer?</h1>
            <div id="avaliacoes">
                <div class="avaliacao">
                    <div class="SuperiorAvaliacao">
                        <img src="{{ asset( 'image/iconGuest.png')}}" alt="" class="guest">
                        <div class="clientes">
                            <h1>Cliente 1</h1>
                            <img src="{{ asset( 'image/5stars.png')}}" alt="" class="stars">
                        </div>

                    </div>

                    <div class="textoAvaliacao">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem inventore aliquam et quas rem reiciendis quaerat, error </p>
                    </div>




                </div>

                <div class="avaliacao">
                    <div class="SuperiorAvaliacao">
                        <img src="{{ asset( 'image/iconGuest.png')}}" alt="" class="guest">
                        <div class="clientes">
                            <h1>Cliente 1</h1>
                            <img src="{{ asset( 'image/5stars.png')}}" alt="" class="stars">
                        </div>

                    </div>

                    <div class="textoAvaliacao">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem inventore aliquam et quas rem reiciendis quaerat, error </p>
                    </div>

                </div>

                <div class="avaliacao">
                    <div class="SuperiorAvaliacao">
                        <img src="{{ asset( 'image/iconGuest.png')}}" alt="" class="guest">
                        <div class="clientes">
                            <h1>Cliente 1</h1>
                            <img src="{{ asset( 'image/5stars.png')}}" alt="" class="stars">
                        </div>

                    </div>

                    <div class="textoAvaliacao">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem inventore aliquam et quas rem reiciendis quaerat, error </p>
                    </div>
            </div>
        </div>


    </main>

    <footer>
        <div id="logoFooter">
            <h1 class="findNome">FindLancer</h1>
        </div>


        <div class="cr">
            <p> &copy; FindLancer - Direitos Reservados</p>
        </div>

    </footer>

</body>
</html>
