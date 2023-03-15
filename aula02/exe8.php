<?php
    
    $dados[] = ["nome" => "Maria", "data_nasc" => "10/10/1985" , "salario" => 2500, "cod_cargo" => 3];
    $dados[] = ["nome" => "Joao", "data_nasc" => "01/01/1983" , "salario" => 1500,"cod_cargo" => 1];
    $dados[] = ["nome" => "Pedro", "data_nasc" => "15/11/1984" , "salario" => 4500,"cod_cargo" => 4];
    $dados[] = ["nome" => "Carla", "data_nasc" => "25/03/1994" , "salario" => 1500,"cod_cargo" => 1];
    $dados[] = ["nome" => "Pedro", "data_nasc" => "14/05/2002" , "salario" => 1000,"cod_cargo" => 5];

    /*echo "<pre>";
    print_r($dados);
    echo "</pre>";
    */

    /*
    for($i = 0 ;$i<count($dados); $i++){

        echo "--------------------------------";
        echo "<br>";
        echo "Nome: ".$dados[$i]['nome']."<br>";
        echo "Data de Nascimento: ".$dados[$i]['data_nasc']."<br>"; 
        echo "Salário: ".$dados[$i]['salario']."<br>";
        echo "Código do Cargo: ".$dados[$i]['cod_cargo']."<br>";
        echo "--------------------------------";

    };
    */
    echo "<br>";
    echo "AUMENTO DE SALÁRIO";
    echo "<br>";

        for($i = 0 ;$i < sizeof($dados); $i++){
            if($dados[$i]['cod_cargo'] == 1){
                $dados[$i]['salario'] = $dados [$i]['salario'] * 1.10; 
            };
            echo "--------------------------------";
            echo "<br>";
            echo "Nome: ".$dados[$i]['nome']."<br>";
            echo "Data de Nascimento: ".$dados[$i]['data_nasc']."<br>"; 
            echo "Salário: ".$dados[$i]['salario']."<br>";
            echo "Código do Cargo: ".$dados[$i]['cod_cargo']."<br>";
            echo "--------------------------------"; 
        };

        $pesquisa = 'Pedro';
        


?>
