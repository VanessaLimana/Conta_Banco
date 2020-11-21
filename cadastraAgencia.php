<html>
<meta charset="UTF-8">
<form name = "dadosPessoa" action = "conexnew.php" method = "POST">
<table border="1">
    <head>
     <link rel="stylesheet" type="text/css" href="formata.css">
    </head>
    <tbody>
        
        <tr>
            <td>Seu codigo será gerado automaticamente :</td>
            
        </tr>
        <tr>
            <td>Nome:</td>
            <td><input type="text" name="nome" value="" /></td>
        </tr>
        <tr>
            <td>Cidade:</td>
            <td><input type="text" name="cidade" value="" /></td>
        </tr> 
        
        <tr> 
            <td><input type="hidden" name="acao" value="inserir" /></td>
            <td><input type="submit" value="enviar" name="enviar" /></td>
        </tr>
            </tbody>
       </form>    
</table>
</html>