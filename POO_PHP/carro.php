<?php
    class Carro{
        
        public $marca;
        public $modelo;
        public $placa;
        public $potencia;
        public $cor;
        public $qtdPortas;
        public $qtdLugares;
        public $situacao;
        public $vidroEletrico;

        function Carro($placa, $cor, $marca, $modelo){

            $this->placa = $placa;
            $this->cor= $cor;
            $this->marca = $marca;
            $this->modelo = $modelo;
        }
        

        function __construct($placa, $cor, $marca, $modelo){

            $this->placa = $placa;
            $this->cor= $cor;
            $this->marca = $marca;
            $this->modelo = $modelo;
        }
    }
    

?>