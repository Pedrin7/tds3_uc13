<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload de Arquivo</title>
</head>
<body>
    
    <h3>Meu Drivers</h3>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        Escolha o Arquivo<input type="file" name="arquivo">
        <br>
        <input type="submit" value="Enviar">
</form>

</body>
</html>