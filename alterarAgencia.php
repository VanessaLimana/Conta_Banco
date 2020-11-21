<?php
include ("conexnew.php");
$tb_agencia = selecionaCodag($_POST["codag"]);
//var_dump($tb_agencia);
?>

<meta charset="UTF-8">
<form name = "dadosPessoa" action = "conex.php" method = "POST">
<table border="1">
                <link rel="stylesheet" type="text/css" href="formata.css">

    <tbody>
        
        <tr>
            <td>Nome</td>
            <td><input type="text" name="nome" value="<?=tb_agencia["nome"]?>" /></td>
        </tr>
        <tr>
            <td>cidade</td>
            <td><input type="text" name="cidade" value="<?=tb_agencia["cidade"]?>" /></td>
        </tr>
        <tr>
            <td><input type="hidden" name="acao" value="alterar" /></td>
            <td><input type="text" name ="codag" value="<?=$tb_agencia["codag"]?>"/>
                </td>
                
                <td><input type="submit" value="Enviar" name="Enviar" /></td>

        </tr>
            </tbody>
        </table>
    </form>
