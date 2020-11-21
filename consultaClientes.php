<?php
	//Incluir a conexão com banco de dados
	include_once('conexao2.php');
	
	//Recuperar o valor da palavra
	$tb_cliente = $_POST['palavra'];
	
	//Pesquisar no banco de dados nome do curso referente a palavra digitada pelo usuário
	$tb_cliente = "SELECT * FROM tb_cliente WHERE estado_situacao LIKE '%$tb_cliente%'";
	$resultado_cursos = mysqli_query($conn, $tb_cliente);
	
	if (mysqli_num_rows($resultado_cursos) <= 0){
		echo "Nenhuma cliente nesta sistema encontrado...";
	}else{
		while($rows = mysqli_fetch_assoc($resultado_cursos)){
                    
			echo "Nome deste cliente:"."<li>".$rows['nomecliente']."</li>";
                        echo "Localização:"."<li>".$rows['cidadecliente']."</li>";
                        echo "CPF".$rows['cpf']."</li>";
			echo "Situação do cliente é de :"."<li>".$rows['estado_situacao']."</li>";
                        echo "Fisico ou Juridico:"."<li>".$rows['fj']."</li>";
                        echo "Codigo deste cliente: ".$rows['codcli']."</li>";
                     
		}
	}
?>