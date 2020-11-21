<html>
<meta charset="UTF-8">
<form name = "dadosMovimento" action = "conexnew.php" method = "POST">
<table border="1">
    <link rel="stylesheet" type="text/css" href="formata.css">
    <tbody>
        
        <tr>
            <td>Seu numero de conta, será gerado automaticamente :</td>
        </tr>
        <tr>
            <td>Conta:</td>
            <td><input type="text" name="fk_conta1" value="" /></td>
        </tr>
        <tr>
            <td>Cod. Movimento:</td>
            <td><input type="text" name="fk_codmov1" value="" /></td>
        </tr> 
        <tr>
            <td>Valor:</td>
            <td><input type="text" name="valor" value="" /></td>
        </tr> 
        
        <tr>
            <td>Data:</td>
            <td><input type="text" name="data1" placeholder=yyyy/mm/dd value="" /></td>
        </tr> 
        
        <tr> 
            <td><input type="hidden" name="acao" value="inserir" /></td>
            <td><input type="submit" value="enviar" name="enviar" /></td>
        </tr>
            </tbody>
       </form>    
    </table>
</html>


    