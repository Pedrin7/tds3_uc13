<!DOCTYPE html>
<html lang="en">
<head>
    <title>Primeiro form</title>
</head>
<body>
    <form name="frm_dados" action="processa-dados-form.php" method="POST">
        Nome: <input type="text" name="nome" /><br>
        Idade: <input type="text" name="idade"/><br>
        Telefone:<input type="text" name="telefone" id="telefone"/>
        <br>
        <input type="Submit" value="enviar Dados"/><br>
    </form>
</body>
</html>