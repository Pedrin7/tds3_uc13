<?php

    $jogo = [
        array(1, "zé", 11),
        array(2, "josé", 4),
        array(3, "zéca", 22)
    ];

    echo "<pre>";
    print_r($jogo);
    echo "</pre>";


    echo $jogo[1][2];
    echo "<br>";
    echo " Os pontos de ",$jogo[1][1], " são: ",$jogo[1][2];
    $jogo[1][2] = 30;
    echo "<br>";
    echo " Os pontos de ",$jogo[1][1], " são: ",$jogo[2][2];

?>