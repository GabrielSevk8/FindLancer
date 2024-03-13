<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{('css/homeEmp.css')}}">
</head>
<body>
    <header>
        <div id="lesquerdoHead" class="ladoHead">
            <h1>Findlancer</h1>

        </div>

        <div id="ldireitoHead" class="ladoHead">

            <div id="login">
                *Empresa*
            </div>
        </div>
    </header>


    <main>
        <section class="hero">
            <div id="lesquerdo" class="ladoHero">
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

            <div id="ldireito" class="ladoHero">
                <img src="{{ asset( 'image/Findlancer_logo4.png')}}" alt="">
            </div>
        </section>




        <div id="containerVagas">


            <div id="vagas">
                <div class="vaga">
                    <h1 class="tituloVaga">{vaga.titulo}</h1>
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

                <button id="refresh"><i class="bi bi-arrow-clockwise">Carregar Novas Vagas</i></button>
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
            <img src="{{ asset( 'image/Findlancer_logo2.png')}}" alt="">
        </div>
        <div class="opcoes">
            <p class="opcoes">Opção 1</p>
            <p class="opcoes">Opção 2</p>
            <p class="opcoes">Opção 3</p>
        </div>

        <div class="cr">
            <p> &copy; FindLancer - Todos os Direitos Reservados</p>
        </div>

    </footer>


</body>
</html>
