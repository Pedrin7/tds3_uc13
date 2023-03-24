<?php

    $texto = $_POST ["texto"]. ".txt";

    if(file_exists("banco.csv") == false){
    $arquivo = fopen("banco.csv","a");
    fwrite("banco.csv",$texto);
    echo "Arquivo gerado com sucesso";
    fclose($arquivo);
    }
    else{
        echo "Erro: Arquivo já existe, não foi possivel gravar";
    }

?>