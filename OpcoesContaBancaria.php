<!DOCTYPE html> 
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Abertura de contas</title>
    </head>
    <body> 
        <form  method="post" action="MudancaMonetaria.php">
            <p><b>Escolha uma das opções a seguir:</b></p>
            <p>1-Para sacar dinheiro;</p>
            <p>2-Para depositar dinheiro</p>
            <p>3-Para transferir dinheiro</p>
            <p><input type="text" name="tipo"></p>
            <p>Digite o valor que deseja transferir/depositar/sacar</p>
            <p><input type="text" name="valor"></p>
            <input type="submit" value="Enviar">
        </form>
    </body>
</html>
