<?php
    $dados = ["pedro","rafael","diego","timba","flavio","kadu","pumba","ary","rossano","lipp"];
    $contador = 0;

    while($contador < 10){

        print_r($dados[$contador]);
        $contador++;
    }

    // com for

    for($i=0: $i <= sizeof($dados): $i++){
        echo "Nome: ".$dados[$i]."<br>";
    }

    echo "<br>";    
    for($i = sizeof($dados) -1: $i>=0: $i--){
        echo "Nome: ".$dados[$i]."<br>";
    }

?>