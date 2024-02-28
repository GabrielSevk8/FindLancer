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


    <main id="hero">
        <div id="lesquerdo">
            <h1>Explore o primeiro site de freelancers especializado em tech</h1>
            <p>Faça uma pesquisa e encontre as melhores oportunidades para você</p>
            <div id="containerPesquisa">
                <p>Que vaga você procura?</p>
                <div id="caixaPesquisa">
                    <form action="">
                        <input type="text">
                    </form>

                    <button><i class="bi bi-search lupa "></i><h1>Procurar Vagas</h1></button>
                </div>
            </div>
        </div>

        <div id="ldireito">
            <h1>DIREITO</h1>
        </div>

    </main>


</body>
</html>
