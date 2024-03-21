<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Minhas Vagas</title>
    <link rel="stylesheet" href="{{ asset('css/minhas_vagas.css')}}">
    <link rel="shortcut icon" href="{{ asset('image/iconSite.png') }}">
</head>
<body>

	<div class="box">
		<h1>Minhas Vagas</h1>
		<h1><a href="/home_login">Voltar</a></h1>
	</div>

	<table id="jobsTable">
		<thead>
			<tr>
				<th>Empresa</th>
				<th>Cargo</th>
				<th>Status</th>
				<th>Data de Aplicação</th>
		</thead>
	</table>

</body>

</html>
