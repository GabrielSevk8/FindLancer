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
            <a href="#criacaoContas"><h1 class="opcoesHeader">Crie Vagas</h1></a>

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


        <div class="cr">
            <p> &copy; FindLancer - Todos os Direitos Reservados</p>
        </div>

    </footer>


</body>
</html>
