<?php

    $nome = $_POST["nome_projeto"];
    $endereco = $_POST["endereco"];
    $telefone = $_POST["telefone"];
    $cidade = $_POST["cidade"];
    $estado = $_POST["estado"];
    $tipo = $_POST["tipo"];
    $diversos = $_POST["diversos"];
    $fotos = $_POST["fotos"];

    if($fotos != ""){
        pathinfo($fotos["fotos"]);
    }
    else{
        echo "Arquivo não permitido";
    }

    $texto_cadastro = $nome. " , " .$endereco. " , " .$telefone. " , " .$cidade. " , " .$estado. " , " .$tipo. " , " .$diversos. "\n";

    $grava_banco = fopen("banco.csv", "a");
    fwrite($grava_banco , $texto_cadastro);
    fclose($grava_banco);


?>

