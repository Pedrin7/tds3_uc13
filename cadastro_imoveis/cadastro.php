<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Cadastra Imoveis</title>
</head>
<body>
    <h2>CADASTRO DE IMOVEIS</h2>
    <br>
    <form name="cadastro.dados" action="banco.csv" method="$_POST">
        Nome do projeto <input type="text" name="nome_projeto"><br>
        Endereço <input type="text" name="endereco"><br>
        Telefone <input type="text" name="telefone"><br>
        Cidade <input type="text" name="cidade"><br>
        Estado <select name="estado">
            <option>PR</option>
            <option>SC</option>
            <option>RS</option>
        </select><br>
        Tipo <input type="radio" name="tipo" value="Casa">
        <input type="radio" name="tipo" value="Apartamento">
        <input type="radio" name="tipo" value="Terreno"><br>
        Diversos <input type="checkbox" name="diversos" value="Estacionamento">
        <input type="checkbox" name="diversos" value="Patio">
        <input type="checkbox" name="diversos" value="Murado">
        <input type="checkbox" name="diversos" value="Portaria"><br>
        Fotos <input type="file" name="fotos" accept="image/png , image/jpeg"><br>


        <button name="cadastro">CADASTRAR</button>
    </form>
</body>
</html>