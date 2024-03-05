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
                            <i class="bi bi-search "></i><h1 id="txtBotao">Procurar Vagas</h1>
                        </button>
                    </div>
                </div>
            </div>

            <div id="ldireito">
                <h1>DIREITO</h1>
            </div>
        </div>




        <div id="containerVagas">


            <div id="vagas">
                <div class="vaga">
                    <h1 class="tituloVaga">Titulo Vaga</h1>
                    <h1>Nome empresa</h1>
                    <p>De R$1.000,00 a R$ 2.000,00</p>
                    <p><strong>1</strong> Vaga (S)</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio ipsum ducimus praesentium optio ipsa recusandae ipsam. Vel, vitae perspiciatis</p>
                    <button>Ver Vaga Completa</button>
                </div>

                <div class="vaga">
                <h1 class="tituloVaga">Titulo Vaga</h1>
                    <h1>Nome empresa</h1>
                    <p>De R$1.000,00 a R$ 2.000,00</p>
                    <p><strong>1</strong> Vaga (S)</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio ipsum ducimus praesentium optio ipsa recusandae ipsam. Vel, vitae perspiciatis</p>
                    <button>Ver Vaga Completa</button>
                </div>
            </div>

            <div id="textVagasRecomendadas">
                <h1>Vagas
                    <span id="recomendado">Recomendadas</span>
                </h1>
                <p>Veja ao lado as <span id="barra">vagas que selecionamos para você!</span> </p>
            </div>
        </div>




        <div id="containerClientes">
            <h1 id="tituloClientes">O que estão dizendo da FindLancer?</h1>
            <div id="avaliacoes">
                <div class="avaliacao">
                    <img src="{{ asset( 'image/iconGuest.png')}}" alt="">
                    <div class="linhaSuperiorAvaliacao">
                        <h1>Cliente 1</h1>
                    </div>


                </div>

                <div class="avaliacao">
                    <img src="{{ asset( 'image/iconGuest.png')}}" alt="">
                    <div class="linhaSuperiorAvaliacao">
                        <h1>Cliente 1</h1>
                    </div>


                </div>

                <div class="avaliacao">
                    <img src="{{ asset( 'image/iconGuest.png')}}" alt="">
                    <div class="linhaSuperiorAvaliacao">
                        <h1>Cliente 1</h1>
                    </div>


                </div>
            </div>
        </div>
    </main>


</body>
</html>
