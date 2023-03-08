<?php

    $salario = 7.500 ;

    if($salario <= 1.500){
        $novo_salario = $salario * 1.15;
        //echo "Novo Salário: R$" .$novo_salario;
        
    }
    else if($salario > 1.500 && $salario <= 3.000){
        $novo_salario = $salario * 1.10;
        //echo "Novo Salário: R$" .$novo_salario;

    }
    else{
        $novo_salario = $salario * 1.05;
        //echo "Novo Salário: R$" .$novo_salario;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aumento Salário</title>
</head>
    <body>
            <?php
                echo "O novo salário é: R$".number_format($novo_salario, 3,'.',',');
                //number_format formata o número, usar somente na saída de dados!!!!!
             ?>
    
    </body>
</html>
