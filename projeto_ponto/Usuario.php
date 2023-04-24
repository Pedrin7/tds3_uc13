<?php
require_once ("database.php");

class Usuario
{

    private $id;
    private $login;
    private $senha;

    public function __set($atributo, $valor)
    {
        if (property_exists($this, $atributo)) {
            $this->$atributo = $valor;
        }
    }

    public function __get($atributo)
    {
        if (property_exists($this, $atributo)) {
            return $this->$atributo;
        }
    }


    public function __construct()
    {
    }

    public function autenticar($login, $senha_hash)
    {
        $database = new Database();
        $con = $database->connect();

        $sql = "SELECT id, login FROM usuario WHERE login = :login AND senha = :senha";

        $st = $con->prepare($sql);
        $st->bindParam(':login', $login);
        $st->bindParam(':senha', $senha_hash);
        $retorno = $st->execute();
        $dados = $st->fetchAll();

        if (sizeof($dados) == 1){
            return true;
        }
        else{
            return false;
        }
    }

    public function cadastrar($login,$senha){

        $database = new Database();
        $con = $database->connect();

        $sql = "INSERT into usuario (login, senha) VALUES ('$login','$senha') ";

        $st = $con->prepare($sql);
        $retorno = $st->execute();
        $dados = $st->fetchAll();

    }

    public function consultar(){

        
        $database = new Database();
        $con = $database->connect();

        $sql = "SELECT *  FROM usuario";
        
        $st = $con->prepare($sql);
        $retorno = $st->execute();
        $dados = $st->fetchAll();
        
    }
    
}

?>