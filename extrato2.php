<?php
	require('conexao2.php');

$instrucaoSQL = "SELECT DATE_FORMAT(data1,'%d/%m/%Y') 
    AS data1, IF(fk_codmov1 = '1', valor, '') 
    AS debito, IF(fk_codmov1 = '2', valor, '') 
    AS credito, (SELECT SUM(IF(fk_codmov1 = '2', valor, -valor))
    FROM movimento L2 WHERE L2.fk_conta1 <= movimento.fk_conta1) AS saldo FROM movimento";

$instrucaoQuery = mysqli_query($conn, $instrucaoSQL);
//chamada da funcao sql, requerido conexao com banco
$contaQuery = mysqli_num_rows($instrucaoQuery);
// linhas
if($contaQuery > 0) {

    while ( $r = mysqli_fetch_array($instrucaoQuery) ) {
        
        echo  $r['saldo'] . " - " . $r['debito'] .$r['credito'] . "<br>";

    }
}
?>
    