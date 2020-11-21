<?php

if (isset($_POST["acao"])){
    if ($_POST["acao"]=="alterar"){
        alteracaoClienteAtivo();
    }
}
    
function abrirBanco() { 
    $conexnewativo = new mysqli("localhost", "root" , "", "simulacao_banco") or die();
            return $conexnewativo;
}
function voltarIndex(){
header("Location:index.php");
 }
function selecionaclienteativo(){
    $banco = abrirBanco();
    $sql = "SELECT * FROM tb_cliente ORDER BY estado_situacao";
    $resultado = $banco->query($sql);
    
    while ($row = mysqli_fetch_array($resultado)){
        $grupo10[] = $row;
    } 
    return $grupo10;
}
function selectCodcliativo($codcli) {
    $banco =  abrirBanco();
    $sql = "SELECT * FROM tb_cliente WHERE codcli =".$codcli;
    $resultado = $banco->query($sql);
    $banco->close();
    $tb_cliente = mysqli_fetch_assoc($resultado);
    return $tb_cliente;
} 
   
function alteracaoClienteAtivo(){
    $banco = abrirBanco();
    $sql = "UPDATE tb_cliente SET estado_situacao = CONCAT(ativo, 'inativo') WHERE estado_situacao='ativo' ";
//UPDATE Clientes SET FRASE = concat(FRASE, 'dia') WHERE NOME = 'lucas';

        $banco->query($sql);
        $banco->close();
        voltarIndex();

}

