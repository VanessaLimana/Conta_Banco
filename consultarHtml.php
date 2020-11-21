<!DOCTYPE HTML>
<html>
	<head>
            <link rel="stylesheet" type="text/css" href="formata.css">

		<meta charset="utf-8">
		<title>Sistema de Busca </title>
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
		<script type="text/javascript" src="javascriptagencia.js"></script>
	</head>
	<body>
            <p>Pesquisar Agencias</p>
		<form method="POST" id="form-pesquisa" action="">
		Pesquisar por nome da sua cidade: 
                <input type="text" name="pesquisa" id="pesquisa" placeholder="Qual cidade você está procurando?">
			<input type="submit" name="enviar" value="Pesquisar">
		</form>
		
		<ul class="resultado">
		
		</ul>
	</body>
</html>