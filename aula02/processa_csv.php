<?php

    //$file = file_get_contents("arquivos_dados.csv");
    $csv_data = file_get_contents("arquivos_dados.csv");

    $lines = explode("\n", $csv_data);
    for($i=0; $i<count($lines) ;$i++){
        $data = explode("\n", $lines);
        echo " Nome: ".$data[2];
        echo " Email: ".$data[3];
        echo " Data: ".$data[1];
        echo " Total de vendas:".$data[0];
        echo "<br>---------------------------<br>";
    }



    /*
    for($i=0; $i<count($lines) ;$i++){
        echo "Linha .". $i ." - Conteudo: ".$lines[$i];
        echo "<br>";
    }
    */
    /*
    echo "<pre>";

    print_r($csv_data);

    echo "</pre>";
    */
?>