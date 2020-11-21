<?php

header("Content-type: text/html; charset=utf-8");
if(isset($_POST['usuario']) && isset($_POST['senha'])){
	require('conexao2.php');
	$queryUser1 =  mysqli_query($conn, "SELECT * FROM usuario WHERE usuario = '$_POST[usuario]' AND senha = '$_POST[senha]' LIMIT 1");
	if(mysqli_num_rows($queryUser1) != 0){
		if($queryUser = mysqli_fetch_assoc($queryUser1)){
			echo $queryUser['usuario'].',<br><br>Gerente acesso permitido!<br>';
                        echo "<a href=\"efetuandomovimentacaonacontaHTML.php\">Efetuar Movimentações!!! \n\n <a/>";
                        echo $queryUser['usuario'].',<br><br>Gerente acesso permitido!<br>';
                        echo "<a href=\"alteracaoativoinativoHTML.php\">Alterar Cliente Ativo/Inativo<a/>";


		}else{
			echo 'Nenhum usuário com esses dados';
			echo "<br><a href='../index.html>Index</a>'";
		}
	}else{
		echo 'Nenhum usuário cadastrado com esses dados.';
		echo "<br><a href='../index.html>Index</a>'";
	}
	
}else{
	//return false;
	header('Location: ../loginClienteHtml.php');
}
?>

