<?php

    $num1 = 7;
    $num2 = 14 ;
    $soma = $num1 +  $num2;

    if($soma > 20){

        $soma + 8;
        $soma = $soma + 8;
        //$soma +=8;
    }
    elseif($soma <= 20){

        $soma - 5;
        $soma = $soma - 5;
        //$soma -=8;
    }

?>

<html>
    <head>
        <title>Exercicio 1</title>
    </head>
        <body>
            <?php
                echo "O resultado é: ".$soma;
            ?>

        </body>
</html>
