<?php

    require_once("carro.php");

    $c1 = new Carro("AAB1405", "azul", "GM", "CORSA");
    $c1 -> potencia = 120;
    $c1 -> qtdLugares = 5;
    $c1 -> qtdPortas = 4;
    $c1 -> vidroEletrico = "Não";

    $c2 = new Carro("AAB1105","RosaBebe", "Toyota", "SUPRA_MK4");
    $c2 -> potencia = 400;
    $c2 -> qtdLugares = 5;
    $c2 -> qtdPortas = 4;
    $c2 -> vidroEletrico = "Sim";

    echo "O carro 1 se chama: ". $c1 -> modelo;
    echo "<br>";
    echo "O carro 1 tem a cor: ". $c1 -> cor;
    echo "<br>";
    echo "O carro 2 se chama: ". $c2 -> modelo;
    echo "<br>";
    echo "O carro 2 tem a cor: ". $c2 -> cor;


?>