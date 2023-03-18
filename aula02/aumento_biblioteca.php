<?php

function ajusta_salario($salario, $aumento){
    $salario_aumento = $salario * ($aumento / 100);

    $novo_salario = $salario + $salario_aumento;

    return $novo_salario;
}

?>