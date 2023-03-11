<?php

    $tabuada = 7;

    for($i = 0; $i <= 10; $i++){

        $conta = $tabuada * $i;
        echo "<br>";
        echo $tabuada, " x ", $i, " = ", $conta;
    };
    
    
    //com while
    echo "<br>";
    $i = 0;
    while($i <= 10){
        $calculo = $i * $tabuada;
        echo "<br>";
        echo $tabuada, " x ", $i, " = ", $conta;
        $i++;
    };
?>