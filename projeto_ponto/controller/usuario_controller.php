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

            }
            else if($acao == "consultar"){

                $usuario = new Usuario();
                $dados = $usuario->consultar();

                require_once("../view/usuario/tela_consulta.php");

            }
            else if($acao == "editar"){
                $id = $get["id"];
                $usuario = new Usuario();
                $dados = $usuario->buscarPorId($id);

                require_once("../view/usuario/tela_editar.php");

            }

            else if($acao == "atualizar"){

                //fazer o atualizar

                require_once("../view/usuario/tela_consulta.php");
            }
        }

    }

    $controller = new UsuarioController();
    $controller->execute($_POST,$_GET);

?>