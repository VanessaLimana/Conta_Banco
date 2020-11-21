<?php
include ("conexnewativo.php");
$tb_cliente = selectCodcliativo($_POST["codcli"]);
//var_dump($tb_agenda);
?>
<meta charset="UTF-8">
<form name = "dadosCliente" action = "conexnew.php" method = "POST">
<table border="1">
 <link rel="stylesheet" type="text/css" href="formata.css">

    
    <tbody>
        
        <tr>
            <td>Situacao cliente:</td>
            <td><input type="text" name="estado_situacao" value="<?=tb_cliente["estado_situacao"]?>" /></td>
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