<?php
	//Incluir a conexão com banco de dados
	include_once('conexao2.php');
	
	//Recuperar o valor da palavra
	$movimento = $_POST['palavra'];
        
	
	//Pesquisar no banco de dados nome do curso referente a palavra digitada pelo usuário
	$movimento = "SELECT * FROM movimento WHERE fk_conta1 LIKE '%$movimento%'";
	$resultado_movimento = mysqli_query($conn, $movimento);
	
	if (mysqli_num_rows($resultado_movimento) <= 0){
		echo "Nenhuma transaçao realizada...";
	}else{
		while($rows = mysqli_fetch_assoc($resultado_movimento)){
                    
			echo "Codigo da sua conta é:"."<li>".$rows['fk_conta1']."</li>";
                        echo "O codigo da sua movimentação (Exemplos, se for M1 =Retirada de dinheiro, M2= Deposito em dinehrio e M3 = Tarifas cobradas durante o mês):"."<li>".$rows['fk_codmov1']."</li>";
                        echo "Movimentação da conta efeuada na data:"."<li>".$rows['data1']."</li>";
                        echo "Valor da movimentação :"."<li>".$rows['valor']."</li>";

		}
	}
?>