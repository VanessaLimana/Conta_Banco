<?php
include ("conexnew.php");
$tb_cliente = selectCodcli($_POST["codcli"]);
//var_dump($tb_agenda);
?>
<meta charset="UTF-8">
<form name = "dadosCliente" action = "conexnew.php" method = "POST">
<table border="1">
 <link rel="stylesheet" type="text/css" href="formata.css">

    
    <tbody>
        
        <tr>
            <td>nomecliente</td>
            <td><input type="text" name="nomecliente" value="<?=tb_cliente["nomecliente"]?>" /></td>
        </tr>
        <tr>
            <td>CPF</td>
            <td><input type="text" name="cpf" value="<?=tb_cliente["nascimento"]?>" /></td>
        </tr>
        <tr>
            <td>F/J</td>
            <td><input type="text" name="fj" value="<?=tb_cliente["fj"]?>" /></td>
        </tr>
        <tr>
            <td>Cidade cliente:</td>
            <td><input type="text" name="cidadecliente" value="<?=tb_cliente["cidadecliente"]?>" /></td>
        </tr>
        <tr>
            <td><input type="hidden" name="acao" value="alterar" /></td>
            <td><input type="hidden" name ="codcli" value="<?=$tb_cliente["codcli"]?>"/>
                </td>
                <td><input type="submit" value="Enviar" name="Enviar" /></td>

        </tr>
            </tbody
        </table>
    </form>