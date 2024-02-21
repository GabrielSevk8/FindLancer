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
        <div id="lesquerdo">
            <img src="{{ asset('image/Findlancer_logo3.png') }}" alt="" id="logo">
            <h2>Opção 1</h2>
            <h2>Opção 2</h2>
            <h2>Opção 3</h2>
            <h2>Opção 4</h2>




        </div>

        <div id="ldireito">
            <i class="bi bi-search lupa "></i>
            <div id="login">
                Acessar sua Conta
            </div>
        </div>
    </header>









    <main>
        <div id="carrossel">
            <img src="{{ asset('image/Banner1.png') }}" alt="" id="banner">
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

                    <button> Criar Conta Empresa</button>
                </div>
                <div id="cliente">
                    <p>Para</p>
                    <h1>Você</h1>
                    <p>Ache vagas destinada ao seu perfil como free-lancer,
                        utilize nossos filtros para buscara vaga ideal, usando
                        uma interface fácil de intuitiva.
                    </p>
                    <button>Criar conta Pessoal</button>
                </div>
            </div>

        </div>

        <div id="selecaoFiltros">

            <div id="listFiltros">
                <div class="filtro">
                    <p>FRONT</p>
                </div>

                <div class="filtro">
                    <p>BACK</p>
                </div>

                <div class="filtro">
                    <p>FULL STACK</p>
                </div>

                <div class="filtro">
                    <p>HARDWARE</p>
                </div>

                <div class="filtro">
                    <p>Redes de Computadores</p>
                </div>

            </div>
            <div id="textos">
                <p>Find Lancer</p>
                <H1>Procure vagas por areas </H1>
                <p>Utilize nossos filtros abaixo para encontra a vaga ideal</p>
            </div>


        </div>
    </main>

    <footer>
        <div id="logoFooter">
            <H1>Find Lancer</H1>
        </div>
        <div id="opcoes">
            TESTE1
            TESTE2
            TESTE3
        </div>

    </footer>

</body>
</html>
