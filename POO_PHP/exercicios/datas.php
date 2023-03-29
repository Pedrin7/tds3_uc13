<?php

    class data{

        private $dia;
        private $mes;
        private $ano;

    }

    private __construct($dia, $mes, $ano){

        $this->setDia ($dia);
        $this->setMes ($mes);
        $this->setAno ($ano);
    }

    private function getDia (){
        if($dia > 31){
            return echo "Preencha com um dia válido";
        }
        else{
            $this->dia -> $dia;
        };
    }

    private function getMes(){
        if($dia > 31){
            return echo "Preencha com um dia válido";
        }
        else{
            $this->dia -> $dia;
        };
    }

    private function geAno(){
        return $this->ano;
    }
   
    private function date(){
        return $this->getDia . "/". $this->;getMes . "/" . $this->getAno;
    }



?>