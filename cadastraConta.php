<html>
<meta charset="UTF-8">
<form name = "dadosConta" action = "conexnew.php" method = "POST">
<table border="1">
   <link rel="stylesheet" type="text/css" href="formata.css">

    <tbody>
        
        <tr>
            <td>Seu numero de conta, será gerado automaticamente :</td>
        </tr>
        <tr>
            <td>Limite:</td>
            <td><input type="text" name="limite" value="" /></td>
        </tr>
        <tr>
            <td>Data abertura:</td>
            <td><input type="text" name="dataabertura" placeholder=yyyy/mm/dd value="" /></td>
        </tr> 
        
        <tr>
            <td>Tipo conta:</td>
            <td><input type="text" name="fk_tipoconta" value="" /></td>
        </tr> 
        
        <tr>
            <td>Codigo do cliente:</td>
            <td><input type="text" name="fk_codcli" value="" /></td>
        </tr> 
        <tr>
            <td>Codigo da agencia:</td>
            <td><input type="text" name="fk_codag" value="" /></td>
        </tr> 
        <tr> 
            <td><input type="hidden" name="acao" value="inserir" /></td>
            <td><input type="submit" value="enviar" name="enviar" /></td>
        </tr>
            </tbody>
       </form>    
    </table>
</html>