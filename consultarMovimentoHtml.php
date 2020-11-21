<!DOCTYPE HTML>
<html>
	<head>
             <link rel="stylesheet" type="text/css" href="formata.css">

		<meta charset="utf-8">
		<title>Sistema de Busca sem Refresh</title>
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
		<script type="text/javascript" src="javascriptmovimento.js"></script>
	</head>
	<body>
            <p> Pesquisar Conta para ver suas movimentações : </p>
		<form method="POST" id="form-pesquisa" action="">
            Pesquisar: <input type="text" name="pesquisa" id="pesquisa" placeholder="Digite sua conta?">
			<input type="submit" name="enviar" value="Pesquisar">
		</form>
		
		<ul class="resultado">
		
		</ul>
	</body>
</html>