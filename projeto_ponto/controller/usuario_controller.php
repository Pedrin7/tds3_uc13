<?php

    require_once "../model/Usuario.class.php";
    class UsuarioController{

        public function execute($post, $get){
            $acao = $get['acao'];
            if($acao == "cadastrar"){
                $usuario = new Usuario();

                $nome = $post["nome"];
                $usuario->__set("nome", $nome);

                $sobrenome = $post["sobrenome"];
                $usuario->__set("sobrenome", $sobrenome);

                $email = $post["email"];
                $usuario->__set("email", $email);

                $login = $post["login"];
                $usuario->__set("login", $login);

                $senha = $post["senha"];
                $confirmar_senha = $post["confirmar_senha"];

                if($senha == $confirmar_senha){
                    $senha_hash = hash("sha3-256",$senha);
                    $usuario->__set("senha",$senha_hash);

                    if($usuario->cadastrar() == true){
                        echo "Usuario cadastrado com sucesso";
                    }

                }
                else{
                    //enviar mensagem de erro,as senhas não batem
                }

            };
        }

    }

    $controller = new UsuarioController();
    $controller->execute($_POST,$_GET);

    /*
    $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    $email = $_POST["email"];
    $login = $_POST["login"];
    $senha = $_POST["senha"];
    $confirmar_senha = $_POST["confirmar_senha"];

    if($senha == $confirmar_senha){
        $senha_hash = hash('sha3-256',$senha);

        $usuario = new Usuario();
        $status = $usuario->cadastrar($login, $senha_hash);

        header("location: principal.php");
    }
    else{
        echo "As senhas não são iguais, por favor, insira senhas iguais";
    }
*/
?>