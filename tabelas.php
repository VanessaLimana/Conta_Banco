<?php include ("conexnew.php");
$grupo1 = selecionacliente();
$grupo2 = selecionaconta();
$grupo3 = selectAllagencias();
$grupo4 = selectAlltiposconta();
$grupo5 = selectAllmovimento();
$grupo6 = selectAlltiposdemovimento();
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
                    <th>Cidade cliente</th>
                    <th>Editar</th>
                </thead>
            <tbody>
                <?php foreach ($grupo1 as $tb_cliente) { ?>
                <tr>
                    <td><?=$tb_cliente["codcli"]?> </td>
                    <td><?=$tb_cliente["nomecliente"]?></td>
                    <td><?=$tb_cliente["cpf"]?></td>
                    <td><?=$tb_cliente["fj"]?></td>
                     <td><?=$tb_cliente["cidadecliente"]?></td>
                    
                     

                    <td>
                        <form name="alterar" action="alteracaoCliente.php" method="POST">
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
        <h2> </h2>
        <table border="1">
            <thead>
                <tr>
                    <th>Conta</th>
                    <th>Limite</th>
                    <th>Data abertura</th>
                    <th>Tipo conta</th>
                    <th>Codigo cliente</th>
                    <th>Editar</th>
                </thead>
            <tbody>
                <?php foreach ($grupo2 as $tb_conta) { ?>
                <tr>
                    <td><?=$tb_conta["conta"]?> </td>
                    <td><?=$tb_conta["limite"]?></td>
                    <td><?=$tb_conta["dataabertura"]?></td>
                    <td><?=$tb_conta["fk_tipoconta"]?></td>
                     <td><?=$tb_conta["fk_codcli"]?></td>
                     <td><?=$tb_conta["fk_codag"]?></td>


                    <td>
                        <form name="alterar" action="alteracaoConta.php" method="POST">
                        <input type="hidden" name="conta" value=<?=$tb_conta["conta"]?> />
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
         <h3></h3>
    <table border=1>   
            <thead>
                <tr>
                <th>Codag </th>
                <th>Nome</th>
                <th>Cidade </th>
                <th>Editar</th>
            
                </thead>
            <tbody>
                <?php foreach ($grupo3 as $tb_agencia) { ?>
                <tr>
                    
                    <td><p>A</p><?=$tb_agencia["codag"]?> 
                    <td><?=$tb_agencia["nome"]?> 
                    <td><?=$tb_agencia["cidade"]?></td>
                    <td>
                        <form name="alterar" action="alterarAgencia.php" method="POST">
                        <input type="hidden" name="codag" value=<?=$tb_agencia["codag"]?> />
                            <input type="submit" name="Editar" value="Editar" />
                        </form>
                    </td>
                                        
                </tr>
                <?php }?>
            </tbody>
        </table>
        <?php
        // alterar conta
        ?>
         <h4></h4>        
         <table border="1">
            <thead>
                <tr>
                    <th>tipoconta</th>
                    <th>descricao</th>
                    <th>classe</th>
                    <th>Excluir</th>
                </thead>
            <tbody>
                <?php foreach ($grupo4 as $tb_tiposconta) { ?>
                <tr>
                    <td><?=$tb_tiposconta["tipoconta"]?> </td>
                    <td><?=$tb_tiposconta["descricao"]?></td>
                    <td><?=$tb_tiposconta["classe"]?></td>
                    
                    <td> 
                            
                        <form name="excluir" action="conexnew.php" method="POST">
                            <input type="hidden" name="tipoconta" value=<?=$tb_tiposconta["tipoconta"]?> />
                            <input type="hidden" name="acao" value="excluir"/>
                            <input type="submit" value="excluir" name="excluir"/>
                        </form>
                    </td>
                </tr>
                <?php }?>
            </tbody>
        </table>

        <?php
        // put your code here
        ?>
  

         <h4></h4>        
         <table border="1">
            <thead>
                <tr>
                    <th>Cod. Movimento</th>
                    <th>Descriçao</th>
                    <th>debito ou credito</th>
                    <th>Excluir</th>
                </thead>
            <tbody>
                <?php foreach ($grupo6 as $tb_tiposmovimento) { ?>
                <tr>
                    <td><?=$tb_tiposmovimento["codmov"]?> </td>
                    <td><?=$tb_tiposmovimento["descricao"]?></td>
                    <td><?=$tb_tiposmovimento["debito_credito"]?></td>
                    
                    <td> 
                            
                        <form name="excluir" action="conexnew.php" method="POST">
                            <input type="hidden" name="codmov" value=<?=$tb_tiposmovimento["codmov"]?> />
                            <input type="hidden" name="acao" value="excluir"/>
                            <input type="submit" value="excluir" name="excluir"/>
                        </form>
                    </td>
                </tr>
                <?php }?>
            </tbody>
        </table>

        <?php
        // put your code here
        ?>
  
