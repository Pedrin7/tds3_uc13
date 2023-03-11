<?php
    
    $dados[] = ["nome" => "Maria", "data_nasc" => "10/10/1985" , "salario" => 2500, "cod_cargo" => 3];
    $dados[] = ["nome" => "Joao", "data_nasc" => "01/01/1983" , "salario" => 1500,"cod_cargo" => 1];
    $dados[] = ["nome" => "Pedro", "data_nasc" => "15/11/1984" , "salario" => 4500,"cod_cargo" => 4];
    $dados[] = ["nome" => "Carla", "data_nasc" => "25/03/1994" , "salario" => 1500,"cod_cargo" => 1];

    /*echo "<pre>";
    print_r($dados);
    echo "</pre>";
    */

    for($i = 0 ; $i <sizeof($dados); $i++){
        echo "Nome: ".$dados[$i]['nome']."<br>"; 
    };
?>