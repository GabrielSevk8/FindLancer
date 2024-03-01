<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{('css/homeLogin.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
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
                Bem vindo, Usuário
            </div>
        </div>
    </header>


    <main>
        <div id="hero">
            <div id="lesquerdo">
                <h1 id="titulo">Explore o primeiro site de freelancers especializado em tech do Brasil</h1>
                <p>Faça uma pesquisa e encontre as melhores oportunidades para você</p>
                <div id="containerPesquisa">
                    <p>Que vaga você procura?</p>
                    <p>Exemplo: Desenvolvedor Mobile São Paulo</p>
                    <div id="caixaPesquisa">
                        <form action="">
                            <input type="text" placeholder="Pesquisa por Cargo">
                        </form>

                        <button id="botaoPesquisa">
                            i class="bi bi-search "></i><h1 id="txtBotao">Procurar Vagas</h1>
                        </button>
                    </div>
                </div>
            </div>

            <div id="ldireito">
                <h1>DIREITO</h1>
            </div>
        </div>




        <div id="containerVagas">
            <h1>Vagas Recomendadas</h1>
            <div id="vagas">
                <div id="vaga1">
                    Teste Vaga1
                </div>

                <div id="vaga2">
                    Teste Vaga2
                </div>
            </div>
        </div>


        <div id="containerPassos">
            <h1>3 passos rumo à sua entrevista de emprego</h1>
            <div id="imgs">
                <div id="img1">
                    <h1>1 Passo: Crie sua Conta</h1>
                    <p>Em menos de 3 minutos, você
                        Cria a sua conta aqui com a gente
                    </p>
                </div>

                <div id="img2">
                    <h1>2 Passo: Hora do CV</h1>
                    <p>Cadastre seu currículo e apareça
                        para as empresas.
                    </p>
                </div>

                <div id="img3">
                    <h1>3 Passo: Candidate-se</h1>
                    <p>Busque as vagas no seu perfil e
                        Candidate-se!
                    </p>
                </div>

            </div>

        </div>

        <div id="containerClientes">
            <h1>O que estão dizendo da FindLancer</h1>
            <div id="avaliacoes">

            </div>
        </div>
    </main>


</body>
</html>
