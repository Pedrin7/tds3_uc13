<?php

    session_start();

    require_once ("Usuario.php");

    $login = $_POST["login"];
    $senha = $_POST["senha"];

    $senha_hash = hash('sha3-256',$senha);

    $usuario = new Usuario();
    $status = $usuario->autenticar($login, $senha_hash);

    if ($status == true){
        $_SESSION["logado"] = true;
        $_SESSION["user"] = $login;
        
        header("location:principal.php");
    }
    else{
        echo "Ops!!! Usuário/senha Inválidos :(";
    }
?>