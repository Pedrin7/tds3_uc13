<?php

    $nome = $_POST["nome_projeto"];
    $endereco = $_POST["endereco"];
    $telefone = $_POST["telefone"];
    $cidade = $_POST["cidade"];
    $estado = $_POST["estado"];
    $tipo = $_POST["tipo"];
    $diversos = $_POST["diversos"];
    $fotos = $_FILES["fotos"];

    if(isset($_FILES["fotos"])){
        move_uploaded_file($_FILES["fotos"]["tmp_name"], "img/". $_FILES["fotos"]["name"]);
        $caminho_foto  = "img/". $_FILES["fotos"]["name"];
    }
    else{
        echo "Não foi possivel fazer o upload!!!";
    }


    
    
    $texto_cadastro = $nome. " , " .$endereco. " , " .$telefone. " , " .$cidade. " , " .$estado. " , " .$tipo. " , " .$diversos. " , ". $caminho_foto."\n";
    
    $grava_banco = fopen("banco.csv", "a");
    fwrite($grava_banco , $texto_cadastro);
    fclose($grava_banco);

?>

