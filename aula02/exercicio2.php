<?php

    $nota1 = 50;
    $nota2 = 70;
    $nota3 = 80;
    $nota4 = 30;

    $mediaFinal = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

    if($mediaFinal >= 70){
        echo "APROVADO";

    }
    elseif($mediaFinal >= 50 && $mediaFinal < 70){
        echo "RECUPERAÇÃO";
    }
    elseif($mediaFinal < 50){
        echo "REPROVADO";
    }

?>
