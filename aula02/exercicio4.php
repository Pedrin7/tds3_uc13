<?php

    $ingresso = 50.00;
    $idade = 9;

    if($idade < 6 || $idade > 65){
        echo "ISENTO";

    }
    else if($idade > 6 && $idade < 10){
        $desconto = $ingresso * 0.50;
        echo "DESCONTO DE 50%. ";
        echo "O VALOR DO INGRESSO FOI: R$ ".$desconto; 

    }
    else{
        echo "VALOR NROMAL";
    }

?>
