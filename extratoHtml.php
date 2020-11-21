<?php include ("conexnew.php");

$grupo5 = selectAllmovimento();
?>
           <link rel="stylesheet" type="text/css" href="formata.css">

         <h4></h4>        
         <table border="1">
            <thead>
                <tr>
                    <th>Cod. Movimento</th>
                    <th>Cod cliente</th>
                    <th>Conta</th>
                    <th>Valor</th>
                    <th>Ver saldo</th>

                </thead>
            <tbody>
                <?php foreach ($grupo5 as $movimento) { ?>
                <tr>
                    <td><?=$movimento["fk_codmov1"]?> </td>
                    <td><?=$movimento["fk_conta1"]?></td>
                    <td><?=$movimento["valor"]?> </td>

                    <td> 
                            
                        <form name="saldo" action="conexnew.php" method="POST">
                            <input type="hidden" name="codmov" value=<?=$movimento["data1"]?> />
                            <input type="hidden" name="ver" value="versaldo"/>
                            <input type="submit" value="saldo" name="saldo"/>
                        </form>
                    </td>
                </tr>
                <?php }?>
            </tbody>
        </table>

        <?php
        // put your code here
        ?>