<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <title>Cadastra Imoveis</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <h2>CADASTRO DE IMOVEIS</h2>
    <br>
    <form name="cadastro_dados" action="grava_cadastro.php" method="POST" enctype="multipart/form-data">
        <div class="div_form">
            Nome do projeto <input type="text" name="nome_projeto"><br>
            <br>
            Endereço <input type="text" name="endereco"><br>
            <br>
            Telefone <input type="text" name="telefone"><br>
            <br>
            Cidade <input type="text" name="cidade"><br>
            <br>
            Estado <select name="estado">
                <option>PR</option>
                <option>SC</option>
                <option>RS</option>
            </select><br>
            <br>
            Tipo <input type="radio" name="tipo" value="Casa" id="casa1">
            <label for="Casa">Casa</label>
            <input type="radio" name="tipo" value="Apartamento" id="apartamento1">
            <label for="Apartamento">Apartamento</label>
            <input type="radio" name="tipo" value="Terreno" id="terreno1">
            <label for="Terreno">terreno</label><br>
            <br>
            Diversos <input type="checkbox" name="diversos" value="Estacionamento">
            <label for="Estacionamento">Estacionamento</label>
            <input type="checkbox" name="diversos" value="Patio">
            <label for="Patio">Patio</label>
            <input type="checkbox" name="diversos" value="Murado">
            <label for="Murado">Murado</label>
            <input type="checkbox" name="diversos" value="Portaria">
            <label for="Portaria">Portaria</label><br>
            <br>
            <label for="fotos" class="ft">Enviar foto</label>
            <input type="file" name="fotos" accept="image/png , image/jpeg" id="fotos"><br>
            <br>
            <button value="cadastro" type="submit" id="botao_cadastro">CADASTRAR</button>
        </div>
    </form>
</body>

</html>