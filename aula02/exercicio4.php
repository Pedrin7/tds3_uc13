<?php

    $ingresso = 50.00;
    $idade = 21;

    if($idade < 6 || $idade > 65){
        $desconto = "ISENTO";
    }
    else if($idade > 6 && $idade < 10){
        $desconto = $ingresso * 0.50;
    }
    else{
        $desconto = $ingresso;
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valor INGRESSO</title>
</head>
    <body>
            <?php
                echo "O valor do ingresso é: " .$desconto;
                //number_format formata o número, usar somente na saída de dados!!!!!
             ?>
    
    </body>
</html>
