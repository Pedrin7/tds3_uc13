<?php

    require_once("usuario.php");

    $usuario = new Usuario();
    $login = $_POST["login"];
    $senha = $_POST["senha"];
    $status = $usuario ->autenticar($login,$senha);

    if ($status == 1){
        header("location:principal.php");
    }
    else{
        echo "OPS!!! Não foi dessa vez";
    }
    
?>