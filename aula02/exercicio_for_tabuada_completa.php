<?php

    for($i = 0; $i <= 10; $i++){
        
        echo "Tabuada do ",$i;
        echo "<br>";
        for($j = 0; $j<=10; $j++){

        $conta = $i * $j;
        echo "<br>";
        echo $i, " x ", $j, " = ", $conta;
        
        }
        
    };

?>