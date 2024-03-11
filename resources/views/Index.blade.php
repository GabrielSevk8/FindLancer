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
            <h2>Opção 1</h2>
            <h2>Opção 2</h2>
            <h2>Opção 3</h2>
            <h2>Opção 4</h2>
        </div>

        <div id="ldireito" class="ladoHead">
            <a href="/login" class="login">
                <div>
                    Acesse sua Conta
                </div>
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
                <div class="filtroCard">
                    <i class="bi bi-code-slash"></i>
                    <p>Front-End</p>
                </div>

                <div class="filtroCard">
                    <i class="bi bi-braces"></i>
                    <p>Back-End</p>
                </div>

                <div class="filtroCard">
                    <i class="bi bi-code-square"></i>
                    <p>Full Stack</p>
                </div>

                <div class="filtroCard">
                    <i class="bi bi-cpu"></i>
                    <p>Hardware</p>
                </div>

                <div class="filtroCard">
                    <i class="bi bi-router"></i>
                    <p>Redes</p>
                </div>

            </div>
            <div id="textos">
                <H1>Procure vagas por áreas </H1>
                <p>Utilize nossos filtros ao lado para encontrar a vaga ideal.</p>
            </div>


        </div>
    </main>

    <footer>
        <div id="logoFooter">
            <h1 class="findNome">FindLancer</h1>
        </div>
        <div class="opcoes">
            <p class="opcoes">Opção 1</p>
            <p class="opcoes">Opção 2</p>
            <p class="opcoes">Opção 3</p>
        </div>

        <div class="cr">
            <p> &copy; FindLancer - Direitos Reservados</p>
        </div>

    </footer>

</body>
</html>
