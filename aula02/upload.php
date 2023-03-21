<?php

    /*
    echo "<pre>";
    print_r($_FILES);
    echo "</pre>";
    */

    $nome_arquivo = $_FILES['arquivo']['name'];
    $dir_arquivo= "upload/".$nome_arquivo;


    if(move_uploaded_file($_FILES['arquivo']['tmp_name'], $dir_arquivo)){
   	 echo "Arquivo carregado com sucesso";
    }
    else{
   	 echo "Erro ao carregar o arquivo";
    }


?>