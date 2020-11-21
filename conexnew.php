<?php

if (isset($_POST["acao"])){
    if ($_POST["acao"]=="alterar"){
        alteracaoCliente();
    }
    if ($_POST["acao"]=="alterar"){
        alteracaoConta();
    }
       if ($_POST["acao"]=="excluir"){
            excluirTconta();
      }
      if ($_POST["acao"]=="excluir"){
            excluirTmovimento();
      }
        if ($_POST["acao"]=="inserir"){
        inserirCliente();
    }
   
     if ($_POST["acao"]=="inserir"){
        inserirAgencia();
     }
     if ($_POST["acao"]=="alterar"){
         alterarAgencia();
    }
    if ($_POST["acao"]=="inserir"){
        inserirConta();
    }
  
    if ($_POST["acao"]=="inserir"){
        inserirMovimento(); 
        }
    if ($_POST["acao"]=="excluir"){
         excluirTiposdemovimento();
     }
   
      if ($_POST["acao"]=="inativo"){
         clientesInativos();
     }       

     if ($_POST ["alterarativo"] == "alterarativo"){
         alteracaoClienteAtivo();
     }
     if ($_POST ["ver"] == "versaldo"){
     extratoMovimento();
    }
}
 /* o Isset é uma função que checa se uma variável existe e certifica-se de que seu valor
não seja NULO.
o Ela retorna booleans: true se a variável existir e não for nula e false caso contrário. */
function abrirBanco() { 
    $conexnew = new mysqli("localhost", "root" , "", "simulacao_banco") or die();
            return $conexnew;
}
function voltarIndex(){
header("Location:index.php");
 }
 
function selecionacliente(){
    $banco = abrirBanco();
    $sql = "SELECT * FROM tb_cliente ORDER BY nomecliente";
    $resultado = $banco->query($sql);
    
    while ($row = mysqli_fetch_array($resultado)){
        $grupo1[] = $row;
    } 
    return $grupo1;
}
function selectCodcli($codcli) {
    $banco =  abrirBanco();
    $sql = "SELECT * FROM tb_cliente WHERE codcli =".$codcli;
    $resultado = $banco->query($sql);
    $banco->close();
    $tb_cliente = mysqli_fetch_assoc($resultado);
    return $tb_cliente;
} 

function alteracaoCliente(){
    $banco = abrirBanco();
    $sql = "UPDATE tb_cliente SET nomecliente='{$_POST["nomecliente"]}',"
        ."cpf='{$_POST["cpf"]}',fj='{$_POST["fj"]}',"
        ."cidadecliente='{$_POST["cidadecliente"]}' WHERE codcli='{$_POST["codcli"]}'";
        $banco->query($sql);
        $banco->close();
        voltarIndex();
}

function inserirCliente(){
$banco = abrirBanco();
$sql = "INSERT INTO tb_cliente (codcli, nomecliente, cpf, fj, cidadecliente)"
            ."VALUES ('{$_POST["codcli"]})','{$_POST["nomecliente"]})','{$_POST["cpf"]})','{$_POST["fj"]})','{$_POST["cidadecliente"]}')";
$banco->query($sql);
$banco->close();
voltarIndex();           
}

//conta 


function selecionaconta(){
    $banco = abrirBanco();
    $sql = "SELECT * FROM tb_conta ORDER BY limite";
    $resultado = $banco->query($sql);
    
    while ($row = mysqli_fetch_array($resultado)){
        $grupo2[] = $row;
    } 
    return $grupo2;
}
function selecionaIdConta($conta) {
    $banco =  abrirBanco();
    $sql = "SELECT * FROM tb_conta WHERE conta =".$conta;
    $resultado = $banco->query($sql);
    $banco->close();
    $tb_conta = mysqli_fetch_assoc($resultado);
    return $tb_conta;
} 

function alteracaoConta(){
    $banco = abrirBanco();
    $sql = "UPDATE tb_conta SET limite='{$_POST["limite"]}',"
        ."dataabertura='{$_POST["dataabertura"]}' WHERE conta='{$_POST["conta"]}'";
        $banco->query($sql);
        $banco->close();
        voltarIndex();
}
function inserirConta(){
$banco = abrirBanco();
$sql = "INSERT INTO tb_conta (limite, dataabertura, fk_tipoconta, fk_codcli, fk_codag)"
            ."VALUES ('{$_POST["limite"]})','{$_POST["dataabertura"]})','{$_POST["fk_tipoconta"]})','{$_POST["fk_codcli"]})','{$_POST["fk_codag"]}')";
$banco->query($sql);
$banco->close();
voltarIndex();           
}

//agencia
function selectAllagencias(){
    $banco = abrirBanco();
    $sql = "SELECT * FROM tb_agencia ORDER BY nome";
    $resultado = $banco->query($sql);
    
    while ($row = mysqli_fetch_array($resultado)){
        $grupo2[] = $row;
    } 
    return $grupo2;
} 

function selecionaCodag($codag) {
    $banco =  abrirBanco();
    $sql = "SELECT * FROM tb_agencia WHERE codag = '$codag' ";
    $resultado = $banco->query($sql);
    $banco->close();
    $tb_agencia = mysqli_fetch_assoc($resultado);
    return $tb_agencia;
} 
    function inserirAgencia(){
    $banco = abrirBanco();
    $sql = "INSERT INTO tb_agencia (codag, nome, cidade)"
                ."VALUES ('{$_POST["codag"]})','{$_POST["nome"]})','{$_POST["cidade"]}')";
    $banco->query($sql);
    $banco->close();
    voltarIndex();               
}

function alterarAgencia(){
    $banco = abrirBanco();
    $sql = "UPDATE tb_agencia SET nome='{$_POST["nome"]}',"
        ."cidade='{$_POST["cidade"]}' WHERE codag='{$_POST["codag"]}'";
        $banco->query($sql);
        $banco->close();
        voltarIndex();
        
}
//movimntacao
function selectAllmovimento(){
    $banco = abrirBanco();
    $sql = "SELECT * FROM movimento ORDER BY valor";
    $resultado = $banco->query($sql);
    
    while ($row = mysqli_fetch_array($resultado)){
        $grupo5[] = $row;
    } 
    return $grupo5;
} 

function selecionamovimento($data1) {
    $banco =  abrirBanco();
    $sql = "SELECT * FROM movimento WHERE codag = '$data1' ";
    $resultado = $banco->query($sql);
    $banco->close();
    $movimento = mysqli_fetch_assoc($resultado);
    return $movimento;
} 
    function inserirMovimento(){
    $banco = abrirBanco();
    $sql = "INSERT INTO movimento (fk_conta1, fk_codmov1, valor, data1)"
                ."VALUES ('{$_POST["fk_conta1"]})','{$_POST["fk_codmov1"]})','{$_POST["valor"]})','{$_POST["data1"]}')";
    $banco->query($sql);
    $banco->close();
    voltarIndex();               
}
function extratoMovimento(){
    $banco = abrirBanco();
    $sql = "SELECT DATE_FORMAT(data1,'%d/%m/%Y') AS data1,
    IF(fk_codmov1 = '1', valor, '') AS debito,
    IF(fk_codmov1 = '2', valor, '') AS credito,
    (SELECT SUM(IF(fk_codmov1 = '2', valor, -valor))
        FROM movimento L2
        WHERE L2.fk_codcli1 <= movimento.fk_codcli1) AS saldo
FROM movimento ";
    $banco->query($sql);
    $banco->close();
    voltarIndex();
}
//excluir
function selectAlltiposconta(){
    $banco = abrirBanco();
    $sql = "SELECT * FROM tb_tiposconta ORDER BY descricao";
    $resultado = $banco->query($sql);
    
    while ($row = mysqli_fetch_array($resultado)){
        $grupo4[] = $row;
    } 
    return $grupo4;
}
function selectIdtiposconta($id) {
    $banco =  abrirBanco();
    $sql = "SELECT * FROM tb_tiposconta WHERE tipoconta =".$tipoconta;
    $resultado = $banco->query($sql);
    $banco->close();
    $tb_tiposconta = mysqli_fetch_assoc($resultado);
    return $tb_tiposconta;
} 

function excluirTconta(){
$banco = abrirBanco();
$sql = "DELETE FROM tb_tiposconta WHERE tipoconta='{$_POST["tipoconta"]}'";
$banco->query($sql);
 $banco->close();
 voltarIndex();

}


/* excluir tipo de movimento */

function selectAlltiposdemovimento(){
    $banco = abrirBanco();
    $sql = "SELECT * FROM tb_tiposmovimento ORDER BY descricao";
    $resultado = $banco->query($sql);
    
    while ($row = mysqli_fetch_array($resultado)){
        $grupo6[] = $row;
    } 
    return $grupo6;
} 

function selecionaTiposdemovimento($codmov) {
    $banco =  abrirBanco();
    $sql = "SELECT * FROM tb_tiposmovimento WHERE codmov = '$codmov' ";
    $resultado = $banco->query($sql);
    $banco->close();
    $tb_tiposdemovimento = mysqli_fetch_assoc($resultado);
    return $tb_tiposdemovimento;
} 
function excluirTmovimento(){
$banco = abrirBanco();
$sql = "DELETE FROM tb_tiposmovimento WHERE codmov='{$_POST["codmov"]}'";
$banco->query($sql);
 $banco->close();
 voltarIndex();

}


        
