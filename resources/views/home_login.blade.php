<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="{{('css/homeLogin.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="shortcut icon" href="{{ asset('image/iconSite.png') }}">
</head>
<body>
    <header>
        <div id="lesquerdoHead" class="ladoHead">
            <h1>Findlancer</h1>
            <h2><a href="/minhas_vagas">Minhas Vagas</a></h2>
            <h2><a href="/meus_dados">Meus Dados</a></h2>
            <a href="/logout"><h2>Sair</h2></a>
        </div>

        <div id="ldireitoHead" class="ladoHead">
            <form action="/pesquisa_vagas" method="POST">
                <i class="bi bi-search lupa "></i>
                <input type="text" placeholder="Pesquise Vagas Aqui" class="pesquisa" name="pesquisa">

            </form>

            <div id="login" class="sidenav">
                <p>Ola <span id="nomeUsuario">{{ Auth::user()->nome }}</span></p>
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

        <div id="tituloVaga">
            <h1>Veja algumas de nossas vagas</h1>
        </div>
        <div id="containerVagas">

            @foreach ( $todasVagas as $vaga )

                <div id="vagas">
                    <div class="vaga">
                        <h1 class="tituloVaga">{{ $vaga->tItulo_vaga }}</h1>
                        <h1>{{ $vaga->nome_empresa }}</h1>
                        <p>R${{ $vaga->salario }}</p>
                        <!--<p><strong></strong> Vaga (S)</p>-->
                        <p>{{ $vaga->descricao }}</p>
                    </div>
                </div>


            @endforeach

        </div>



        <!--<div id="containerVagas">

            <div id="tituloVagas">
                <h1>Melhores Vagas</h1>
            </div>
            @foreach ( $todasVagas as $vaga )



            <div id="vagas"></div>
                <div class="vaga">
                    <h1 class="tituloVaga">{{ $vaga->tItulo_vaga }}</h1>
                    <h1>{{ $vaga->nome_empresa }}</h1>
                    <p>R${{ $vaga->salario }}</p>
                    <! -<p><strong></strong> Vaga (S)</p>- ->
                    <p class="elipses">{{ $vaga->descricao }}</p>
                    <button>Vaga Completa</button>
                </div>
            </div>


            @endforeach


        </div>

        !-->




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
            <img src="{{ asset( 'image/Findlancer_logo2.png')}}" alt="">
        </div>
        <div class="opcoesFooter">

            <h2 id="politica">Política de Privacidade</h2>
            <h2 id="sobre">Sobre Nós</h2>
            <div class="opcoesFooter">
            <div id="sobremodal" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <h3>"Sobre Nós"</h3>
                <h1><strong>Bem-vindo ao Findlancer</strong></h1>

    <p>O seu destino primordial para conexões significativas no mundo da tecnologia da informação (TI).</p>

    <p>Aqui no Findlancer, estamos apaixonados por promover oportunidades inovadoras e facilitar a união entre talentos excepcionais e projetos desafiadores.</p>

    <h2>Nossa Missão</h2>

    <p>Nosso compromisso é criar uma plataforma dinâmica e acessível que permita aos profissionais de TI explorar novos horizontes e alcançar todo o seu potencial.</p>

    <p>Desde desenvolvedores de software até especialistas em segurança cibernética, passando por designers de UX/UI e muito mais, o Findlancer é o seu ponto de partida para encontrar as oportunidades que melhor se alinham com suas habilidades e aspirações.</p>

    <h2>Nossa Abordagem</h2>

    <p>O que nos diferencia no cenário competitivo dos sites de empregos é nossa abordagem centrada no indivíduo.</p>

    <p>Entendemos que cada profissional de TI é único, com suas próprias experiências, interesses e metas.</p>

    <p>É por isso que buscamos oferecer uma experiência personalizada, fornecendo recursos e ferramentas que capacitam você a tomar as melhores decisões para sua carreira.</p>

    <h2>Nossos Valores</h2>

    <p>Além disso, no Findlancer, priorizamos a transparência, a integridade e o respeito.</p>

    <p>Estamos comprometidos em proteger a privacidade e os interesses de nossos usuários, proporcionando um ambiente seguro e confiável para conectar talentos e empresas.</p>

    <h2>Nossa Visão</h2>

    <p>Quer você esteja procurando por um projeto freelance emocionante, uma oportunidade de emprego em tempo integral ou simplesmente queira explorar o que o mercado tem a oferecer, o Findlancer está aqui para ajudá-lo a alcançar seus objetivos.</p>

    <p>Junte-se a nós e faça parte de uma comunidade vibrante de profissionais de TI dedicados a impulsionar a inovação e a excelência em todo o mundo.</p>

    <p>O futuro está nas suas mãos, e no Findlancer, estamos aqui para ajudá-lo a moldá-lo conforme sua visão.</p>

    <h2>Seja bem-vindo ao Findlancer</h2>

    <p>O seu portal para um mundo de oportunidades na tecnologia da informação.</p>
            </div>
        </div>


        <div id="politicamodal" class="modal2">
            <div class="modal-content2">
                <span class="close2">&times;</span>
                <h1 id="tituloPolitica">Política de Privacidade</h1>
                <p>Última atualização: 20/03/2024</p>
                <p>O FindLancer valoriza a privacidade de seus usuários e está comprometido em proteger suas informações pessoais. Esta Política de Privacidade descreve como coletamos, usamos e protegemos as informações que você fornece ao usar o nosso site e os serviços relacionados.</p>
                <h1>Informações coletadas</h1>
                <ul>
                    <li>Informações pessoais: Podemos solicitar informações pessoais, como nome, endereço de e-mail, informações de contato e outras informações relevantes para fornecer os serviços de busca de vagas para freelancers.</li>
                    <li>Informações de perfil: Podemos coletar informações sobre suas habilidades, experiência profissional, histórico educacional e outras informações relevantes para criar e gerenciar seu perfil no FindLancer.</li>
                    <li>Informações de uso: Podemos coletar informações sobre como você usa o nosso site, incluindo páginas visitadas, tempo gasto em cada página, cliques, buscas realizadas e outras atividades relacionadas ao uso do FindLancer.</li>
                    <li>Informações de pagamento: Se você optar por usar recursos que exigem pagamento, poderemos coletar informações de pagamento, como detalhes do cartão de crédito, para processar transações de pagamento.</li>
                    <li>Cookies e tecnologias similares: Podemos usar cookies e outras tecnologias de rastreamento para coletar informações sobre suas preferências e atividades de navegação no nosso site.</li>
                </ul>

                <h1>Uso das informações</h1>
                <ul>
                    <li>Fornecer e manter nossos serviços, incluindo a busca de vagas para freelancers e a correspondência com potenciais clientes.</li>
                    <li>Personalizar e melhorar a experiência do usuário, incluindo o conteúdo e as recomendações fornecidas no FindLancer.</li>
                    <li>Processar transações e pagamentos relacionados aos serviços oferecidos no FindLancer.</li>
                    <li>Comunicar-se com você sobre sua conta, atualizações de serviços e outras informações relevantes.</li>
                    <li>Cumprir obrigações legais e regulamentares aplicáveis.</li>
                </ul>

                <h1>Compartilhamento de informações </h1>
                <ul>
                    <li>Com prestadores de serviços terceirizados que nos auxiliam na prestação de serviços, suporte técnico, processamento de pagamentos e outras operações relacionadas ao FindLancer.</li>
                    <li>Com clientes ou potenciais empregadores interessados em contratar freelancers, conforme necessário para facilitar a correspondência entre freelancers e clientes.</li>
                    <li>Quando exigido por lei ou em resposta a solicitações legais válidas, como intimações, ordens judiciais ou processos legais semelhantes.</li>
                    <li>Com o seu consentimento ou conforme permitido por você.</li>
                </ul>


                <h1>Contato</h1>
                <p>Se você tiver dúvidas, preocupações ou comentários sobre esta Política de Privacidade ou nossas práticas de privacidade, entre em contato conosco pelo e-mail: ruanlima257@hotmail.com</p>
            </div>
        </div>

        <div class="cr">
            <p> &copy; FindLancer - Todos os Direitos Reservados</p>
        </div>

    </footer>

    <script src="{{ asset('/js/modal_politica.js')}}"></script>
    <script src="{{ asset('/js/modal_sobre.js')}}"></script>

    <script>
    //Script para achar o nome do usuario quando logar
        var $Usuario = nome;
        var loginDiv = document.getElementById("login");
        loginDiv.innerHTML = $Usuario;
    </script>

</body>
</html>







