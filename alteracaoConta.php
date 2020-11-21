<?php
include ("conexnew.php");
$tb_conta = selecionaIdConta($_POST["conta"]);
//var_dump($tb_agencia);
?>
<meta charset="UTF-8">
<form name = "dadosConta" action = "conexnew.php" method = "POST">
<table border="1">
                <link rel="stylesheet" type="text/css" href="formata.css">

    <tbody>
        
        <tr>
            <td>Limite</td>
            <td><input type="text" name="limite" value="<?=tb_conta["limite"]?>" /></td>
        </tr>
        <tr>
            <td>Data abertura </td>
            <td><input type="text" name="dataabertura" placeholder=yyyy/mm/dd value="<?=tb_conta["dataabertura"]?>" /></td>
        </tr>
            <td><input type="hidden" name="acao" value="alterar" /></td>
            <td><input type="hidden" name ="conta" value="<?=$tb_conta["conta"]?>"/>
                </td>
                <td><input type="submit" value="Enviar" name="Enviar" /></td>

        </tr>
            </tbody>
        </table>
    </form>