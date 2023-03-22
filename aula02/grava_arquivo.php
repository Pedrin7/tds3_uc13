<?php

    $texto = $_POST ["texto"];

    $nome_arquivo = $_POST["nome_arquivo"]. ".txt";

    if(file_exists($nome_arquivo) == false){
    $arquivo = fopen($nome_arquivo,"w");
    fwrite($arquivo,$texto);
    echo "Arquivo gerado com sucesso";
    fclose($arquivo);
    }
    else{
        echo "Erro: Arquivo já existe, não foi possivel gravar";
    }

?>