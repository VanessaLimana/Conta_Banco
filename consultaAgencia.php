<?php
	//Incluir a conexão com banco de dados
	include_once('conexao2.php');
	
	//Recuperar o valor da palavra
	$tb_agencia = $_POST['palavra'];
	
	//Pesquisar no banco de dados nome do curso referente a palavra digitada pelo usuário
	$tb_agencia = "SELECT * FROM tb_agencia WHERE cidade LIKE '%$tb_agencia%'";
	$resultado_cursos = mysqli_query($conn, $tb_agencia);
	
	if (mysqli_num_rows($resultado_cursos) <= 0){
		echo "Nenhuma agencia nesta cidade encontrada...";
	}else{
		while($rows = mysqli_fetch_assoc($resultado_cursos)){
                    
			echo "Nome da agencia desta cidade é:"."<li>".$rows['nome']."</li>";
                        echo "Localização:"."<li>".$rows['cidade']."</li>";
                        echo "Codigo desta agencia para cadastro de conta:"."C".$rows['codag']."</li>";
                     
		}
	}
?>