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

        <div class="opcoesFooter">


            <h2 id="politica">Política de Privacidade</h2>
            <h2 id="sobre">Sobre Nós</h2>

            <!-- Modal "Sobre"-->
            <div id="sobremodal" class="modal">
            <!-- Conteúdo do modal -->
            <div class="modal-content">
                <span class="close">&times;</span>
                <h3>"Sobre Nós"</h3>
                <h3>Bem-vindo ao Findlancer, o seu destino primordial para conexões significativas no mundo da tecnologia da informação (TI). Aqui no Findlancer, estamos apaixonados por promover oportunidades inovadoras e facilitar a união entre talentos excepcionais e projetos desafiadores.

                Nosso compromisso é criar uma plataforma dinâmica e acessível que permita aos profissionais de TI explorar novos horizontes e alcançar todo o seu potencial. Desde desenvolvedores de software até especialistas em segurança cibernética, passando por designers de UX/UI e muito mais, o Findlancer é o seu ponto de partida para encontrar as oportunidades que melhor se alinham com suas habilidades e aspirações.

                O que nos diferencia no cenário competitivo dos sites de empregos é nossa abordagem centrada no indivíduo. Entendemos que cada profissional de TI é único, com suas próprias experiências, interesses e metas. É por isso que buscamos oferecer uma experiência personalizada, fornecendo recursos e ferramentas que capacitam você a tomar as melhores decisões para sua carreira.

                Além disso, no Findlancer, priorizamos a transparência, a integridade e o respeito. Estamos comprometidos em proteger a privacidade e os interesses de nossos usuários, proporcionando um ambiente seguro e confiável para conectar talentos e empresas.

                Quer você esteja procurando por um projeto freelance emocionante, uma oportunidade de emprego em tempo integral ou simplesmente queira explorar o que o mercado tem a oferecer, o Findlancer está aqui para ajudá-lo a alcançar seus objetivos.

                Junte-se a nós e faça parte de uma comunidade vibrante de profissionais de TI dedicados a impulsionar a inovação e a excelência em todo o mundo. O futuro está nas suas mãos, e no Findlancer, estamos aqui para ajudá-lo a moldá-lo conforme sua visão.

                Explore, conecte-se e avance em sua jornada de carreira com o Findlancer. Estamos ansiosos para fazer parte da sua história de sucesso.

                Seja bem-vindo ao Findlancer - O seu portal para um mundo de oportunidades na tecnologia da informação.</h3>

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
            <p> &copy; FindLancer - Direitos Reservados</p>
        </div>



    </footer>
    <script src="{{ asset('/js/modal_politica.js')}}"></script>
    <script src="{{ asset('/js/modal_sobre.js')}}"></script>

</body>
</html>
