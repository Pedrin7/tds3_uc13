<?php
    class Usuario{
        private $login;
        private $senha;
   
    public function __construct(){
    }

    public function __set($atributo, $valor) {
        if (property_exists($this, $atributo)) {
            $this->$atributo = $valor;
        }
    }

    public function __get($atributo) {
        if (property_exists($this, $atributo)) {
            return $this->$atributo;
        }
    }

    function autenticar($login, $senha){
        require_once("database.php");

        $database = new Database();
        $con = $database->connect();

        $sql = "SELECT id,login FROM usuario WHERE login = :login AND senha = :senha ";

        $st = $con->prepare($sql);
        $st->bindParam(':login',$login);
        $st->bindParam(':senha',$senha);
        $retorno = $st->execute();
        $dados = $st->fetchAll();

        if (sizeof($dados) == 1){
            return true;
        }
        else{
            return false;
        }

    }
    }

?>