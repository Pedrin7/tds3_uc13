<?php
require_once ("../infra/database.php");

class Usuario
{

    private $login;
    private $senha;
    private $nome;
    private $sobrenome;
    private $email;
    

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

    public function cadastrar(){

        $database = new Database();
        $con = $database->connect();

        $sql = "INSERT into usuario (nome,sobrenome,email,login,senha) VALUES (:nome , :sobrenome, 
        :email, :login, :senha)";

        $st = $con->prepare($sql);
        $st->bindparam(":nome",$this->nome);
        $st->bindparam(":sobrenome",$this->sobrenome);
        $st->bindparam(":email",$this->email);
        $st->bindparam(":login",$this->login);
        $st->bindparam(":senha",$this->senha);
        $status = $st->execute();

        $idUsuario = $con-> lastInsertId();

        if($status == true){
            return true;

        }

    }

    public function consultar($pagina = null, $contador = 100){

        $database = new Database();
        $con = $database->connect();

        $sql = "SELECT id, nome, sobrenome, email, login FROM usuario limit $contador";
        $rs = $con->query($sql);

        $status = $rs->execute();
        $dados = $rs->fetchAll();

        $database->close();
        return $dados;

    }
    
}

?>