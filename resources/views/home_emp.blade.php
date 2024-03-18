<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="{{('css/homeEmp.css')}}">
</head>
<body>
    <header>
        <div id="lesquerdoHead" class="ladoHead">
            <h1>Findlancer - Empresas</h1>

        </div>

        <div id="ldireitoHead" class="ladoHead">

            <a class="logout" href="/logout"><h2>Sair</h2></a>

            <div class="login">
                *Empresa*
            </div>
        </div>
    </header>


    <main>
        <section class="hero">
            <div id="lesquerdo" class="ladoHero">
                <h1 class="titulo">Find para Empresas</h1>
                <p>Faça uma pesquisa e encontre os melhores candidatos para a sua organização</p>
                <div class="containerCriar">
                    <p>Está precisando de novos funcionarios?</p>

                    <div class="caixaCriar">
                        <button class="botaoCriar">

                            <i class="bi bi-search "></i><h1 id="txtBotao">Criar Vagas</h1>
                        </button>
                    </div>
                </div>
            </div>

            <div class="ldireito" id="ladoHero">
                <img src="{{ asset( 'image/Findlancer_logo4.png')}}" alt="">
            </div>
        </section>




        <div class="containerVagas">


            <div class="vagas">
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

            <div class="textVagasRecomendadas">
                <h1>Vagas
                    <span class="recomendado">Recomendadas</span>
                </h1>
                <p>Veja ao lado as <span class="barra">vagas que selecionamos para você!</span> </p>

                <button id="refresh"><i class="bi bi-arrow-clockwise">Carregar Novas Vagas</i></button>
            </div>
        </div>




        <div class="containerClientes">
            <h1 class="tituloClientes">O que estão dizendo da FindLancer?</h1>
            <div class="avaliacoes">
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
        <div class="logoFooter">
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
