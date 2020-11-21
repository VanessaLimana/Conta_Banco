<html>
<meta charset="UTF-8">
<form name = "dadosPessoa" action = "conexnew.php" method = "POST">
    <table border="2">
 <link rel="stylesheet" type="text/css" href="formata.css">

    
    <tbody>
        
        <tr>
            <td>Seu codigo será gerado automaticamente :</td>
        </tr>
        <tr>
            <td>Nome cliente:</td>
            <td><input type="text" name="nomecliente" value="" /></td>
        </tr>
        <tr>
            <td>cpf:</td>
            <td><input type="text" name="cpf" value="" /></td>
        </tr> 
        
        <tr>
            <td>fj:</td>
            <td><input type="text" name="fj" value="" /></td>
        </tr> 
        
        <tr>
            <td>Cidade (Cliente):</td>
            <td><input type="text" name="cidadecliente" value="" /></td>
        </tr> 
        <tr> 
            <td><input type="hidden" name="acao" value="inserir" /></td>
            <td><input type="submit" value="enviar" name="enviar" /></td>
        </tr>
            </tbody>
       </form>    
    </table>
</html>