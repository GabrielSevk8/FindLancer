<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="{{('css/homeLogin.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <header>
        <div id="lesquerdoHead" class="ladoHead">
            <h1>Findlancer</h1>
            <h2><a href="/minhas_vagas">Minhas Vagas</a></h2>
            <h2 id="meusDados">Meus Dados</h2>
            <a href="/logout"><h2>Sair</h2></a>
        </div>

        <!-- O modal -->
        <div id="myModal" class="modal">
            <!-- Conteúdo do modal -->
            <div class="modal-content">
                <span class="close">&times;</span>
                <h3>Menu de Atualização de Dados</h3>
                <ul class="menu">
                    <li><button id="atualizarNomeBtn">Atualizar Nome</button></li>
                    <li><button id="atualizarEmailBtn">Atualizar Email</button></li>
                    <li><button id="atualizarSenhaBtn">Atualizar Senha</button></li>
                    <li><button id="uploadArquivoBtn">Upload de Arquivo PDF</button></li>
                    <!-- Adicione mais botões conforme necessário -->
                </ul>

                <!-- Formulários de atualização de dados -->
                <form id="formAtualizarNome" class="form">
                    <input type="text" placeholder="Novo Nome" required>
                    <input type="submit" value="Atualizar Nome">
                </form>

                <form id="formAtualizarEmail" class="form">
                    <input type="email" placeholder="Novo Email" required>
                    <input type="submit" value="Atualizar Email">
                </form>

                <form id="formAtualizarSenha" class="form">
                    <input type="password" placeholder="Nova Senha" required>
                    <input type="password" placeholder="Confirme a Nova Senha" required>
                    <input type="submit" value="Atualizar Senha">
                </form>

                <!-- Formulário de upload de arquivo PDF -->
                <form id="formUploadArquivo" class="form" enctype="multipart/form-data">
                    <input type="file" accept=".pdf" required>
                    <input type="submit" value="Enviar PDF">
                </form>
            </div>
        </div>

        <div id="ldireitoHead" class="ladoHead">
            <form action="">
                <i class="bi bi-search lupa "></i>
                <input type="text" placeholder="Pesquise Vagas Aqui" class="pesquisa">

            </form>

            <div id="login" class="sidenav">
                *Usuario*
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
                    <button>Vaga Completa</button>
                </div>

                <div class="vaga">
                <h1 class="tituloVaga">Titulo Vaga</h1>
                    <h1>Nome empresa</h1>
                    <p>De R$1.000,00 a R$ 2.000,00</p>
                    <p><strong>1</strong> Vaga (S)</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio ipsum ducimus praesentium optio ipsa recusandae ipsam. Vel, vitae perspiciatis</p>
                    <button>Vaga Completa</button>
                </div>
            </div>

            <div id="textVagasRecomendadas">
                <h1>Vagas
                    <span id="recomendado">Recomendadas</span>
                </h1>
                <p>Veja ao lado as <span id="barra">vagas que selecionamos para você!</span> </p>

                <button id="refresh"><i class="bi bi-arrow-clockwise"></i> Carregar Novas Vagas</button>
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

    <script>
        // Encontre o h2 "Meus Dados"
        var meusDados = document.getElementById("meusDados");

        // Encontre o modal
        var modal = document.getElementById("myModal");

        // Encontre o elemento de fechar do modal
        var span = document.getElementsByClassName("close")[0];

        // Encontre os botões de atualização
        var atualizarNomeBtn = document.getElementById("atualizarNomeBtn");
        var atualizarEmailBtn = document.getElementById("atualizarEmailBtn");
        var atualizarSenhaBtn = document.getElementById("atualizarSenhaBtn");
        var uploadArquivoBtn = document.getElementById("uploadArquivoBtn");

        // Encontre os formulários de atualização
        var formAtualizarNome = document.getElementById("formAtualizarNome");
        var formAtualizarEmail = document.getElementById("formAtualizarEmail");
        var formAtualizarSenha = document.getElementById("formAtualizarSenha");
        var formUploadArquivo = document.getElementById("formUploadArquivo");

        // Quando o usuário clicar em "Meus Dados", abra o modal
        meusDados.onclick = function() {
            modal.style.display = "block";
        }

        // Quando o usuário clicar no elemento de fechar, feche o modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // Quando o usuário clicar fora do modal, feche-o
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }

        // Adicione eventos de clique aos botões de atualização
        atualizarNomeBtn.onclick = function() {
            // Exiba apenas o formulário de atualizar nome
            formAtualizarNome.classList.add("active");
            formAtualizarEmail.classList.remove("active");
            formAtualizarSenha.classList.remove("active");
            formUploadArquivo.classList.remove("active");
        }

        atualizarEmailBtn.onclick = function() {
            // Exiba apenas o formulário de atualizar email
            formAtualizarNome.classList.remove("active");
            formAtualizarEmail.classList.add("active");
            formAtualizarSenha.classList.remove("active");
            formUploadArquivo.classList.remove("active");
        }

        atualizarSenhaBtn.onclick = function() {
            // Exiba apenas o formulário de atualizar senha
            formAtualizarNome.classList.remove("active");
            formAtualizarEmail.classList.remove("active");
            formAtualizarSenha.classList.add("active");
            formUploadArquivo.classList.remove("active");
        }

        uploadArquivoBtn.onclick = function() {
            // Exiba apenas o formulário de upload de arquivo
            formAtualizarNome.classList.remove("active");
            formAtualizarEmail.classList.remove("active");
            formAtualizarSenha.classList.remove("active");
            formUploadArquivo.classList.add("active");
        }
    </script>

</body>
</html>
