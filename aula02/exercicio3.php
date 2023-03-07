<?php

    $salario = 3.500 ;

    if($salario <= 1.500){
        $novo_salario = $salario * 1.15;
        echo "Novo Salário: R$" .$novo_salario;
        
    }
    else if($salario > 1.500 && $salario <= 3.000){
        $novo_salario = $salario * 1.10;
        echo "Novo Salário: R$" .$novo_salario;

    }
    else{
        $novo_salario = $salario * 1.05;
        echo "Novo Salário: R$" .$novo_salario;
    }

?>
