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

        *{{  }}
        {
            font-family: test;
        }
    </style>
</head>
<body>
    <header>
        <div id="lesquerdo">
            <img src="{{ asset('image/Findlancer_logo2.png') }}" alt="" id="logo">
            <h2>Opção 1</h2>
            <h2>Opção 2</h2>
            <h2>Opção 3</h2>
            <h2>Opção 4</h2>




        </div>

        <div id="ldireito">
            <i class="bi bi-search"></i>
            <div id="login">
                Acessar sua Conta
            </div>
        </div>
    </header>

    <main>
        <div id="carrossel">
            <img src="{{ asset('image/Banner1.jpg') }}" alt="">
        </div>

        <div id="criacaoContas">
            <div id="cliente">
                TESTE1
            </div>
            <div id="empresa">
                TESTE2
            </div>
        </div>

        <div id="selecaoFiltros">
            <H1>Procure vagas por Áreas </H1>
            <p>Utilize nossos filtros abaixo para encontra a vaga ideal</p>
            <div id="front">
                FRONT
            </div>

            <div id="back">
                BACK
            </div>

            <div id="fullstack">
                FULL STACK
            </div>

            <div id="hardware">
                HARDWARE
            </div>

            <div id="redes">
                Redes de Computadores
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
