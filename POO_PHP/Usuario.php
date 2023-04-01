<?php
class Usuario{
   public $nome;
   public $endereco;
   protected $cpf;
   private $senha;
  
   public function __construct($nome, $cpf, $senha){
       echo 'A classe "', __CLASS__, '" foi instanciada!<br>';
       $this->nome = $nome;
       $this->cpf = $cpf;
       $this->senha = $senha;


   }

   public function getCpf (){
       return $this->cpf;
   }
  
   public function getNome():string{
       return $this->nome;
   }


   public function getEndereco():string{
       return $this->endereco;
   }  


   public function logar(){


       return true;
   }

}

?>




