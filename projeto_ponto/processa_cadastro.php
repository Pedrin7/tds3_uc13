<?php

    require_once ("Usuario.php");

    $login = $_POST["login"];
    $senha = $_POST["senha1"];
    $senha2 = $_POST["senha2"];

    if($senha == $senha2){
        $senha_hash = hash('sha3-256',$senha);

        $usuario = new Usuario();
        $status = $usuario->cadastrar($login, $senha_hash);

        header("location: principal.php");
    }
    else{
        echo "As senhas não são iguais, por favor, insira senhas iguais";
    }