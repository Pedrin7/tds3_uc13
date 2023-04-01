<?php

    require_once ("Invoice.php");

    $f1 = new Invoice("1" ,"Turbo" ,"1" ,"500");
    $f2 = new Invoice("2" ,"Escape" ,"2" ,"450");
    $f3 = new Invoice("3" ,"Multimidia" ,"1" ,"2500");

    echo "O código do produto é: ".$f1 -> code. " e a descrição do produto é:  ".$f1 -> description ." e a 
    quantidade é: ".$f1 -> qtd ." o preço é: R$ ".$f1 -> price . " .";

?>  