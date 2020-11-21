<?php include("conexnewativo.php");

$grupo10 = selecionaclienteativo();
  //  var_dump($grupo);

?>
<html>
    <head>
                    <link rel="stylesheet" type="text/css" href="formata.css">

        <meta charset="windows-1252">
        <title></title>
    </head>
    <body>
        <h1> </h1>
        <table border="1">
            <thead>
                <tr>
                    <th>Cod. Cliente</th>
                    <th>Nome cliente</th>
                    <th>CPF</th>
                    <th>F/J</th>
                    <th>Cidade Cliente</th>
                    <th>Situção</th>
                    <th>Editar</th>
                </thead>
            <tbody>
                <?php foreach ($grupo10 as $tb_cliente) { ?>
                <tr>
                     <td><?=$tb_cliente["codcli"]?> </td>
                    <td><?=$tb_cliente["nomecliente"]?></td>
                    <td><?=$tb_cliente["cpf"]?></td>
                    <td><?=$tb_cliente["fj"]?></td>
                     <td><?=$tb_cliente["cidadecliente"]?></td>
                     <td><?=$tb_cliente["estado_situacao"]?></td>

                    <td>
                        <form name="alterarativo" action="alteracaoClienteAtivo.php" method="POST">
                        <input type="hidden" name="codcli" value=<?=$tb_cliente["codcli"]?> />
                         <input type="submit" name="editar" value="Editar" />
                        </form>
                    </td>
                    
                </tr>
                <?php }?>
            </tbody>
        </table>

        <?php
        // put your code here
        ?>
</html>