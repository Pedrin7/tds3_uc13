<?php

    /* 
      <?php
    class Invoice {

    private $code;
    private $description;
    private $qtd;
    private $price;

     function __construct($code, $price, $qtd, $description = "NO DESCRIPTION") {
        $this->$code = $code;
        $this->description = $description;
        $this->setQtd($qtd);
        $this->setPrice($price);
    }

    public function getInvoiceAmount() { 
        return $this->getQtd() * $this->getPrice(); 
    }

    public function getCode() { 
        return $this->code; 
    }

    public function setCode($code) { 
        $this->code = $code; 
    }

    public function getDescription() { 
        return $this->description; 
    }

    public function setDescription($description) { 
        $this->description = $description; 
    }

    public function getQtd() { 
        return $this->qtd; 
    }

    public function setQtd($qtd) { 
        if($qtd < 0){
            $this->qtd = 0;
        }
        else{
            $this->qtd = $qtd;
        }  
    }

    public function getPrice() { 
        return $this->price; 
    }

    public function setPrice($price) { 
        if($price < 0){
            $this->price = 0;
        }
        else{
            $this->price = $price;
        }  
    }
} 
    */

    class Invoice {

        private $code;
        private $description;
        private $qtd;
        private $price;
    }

    function __construct($code, $description, $qtd, $price ){
        $this->code = $code;
        $this->description = $description;
        $this->qtd = $qtd;
        $this->price = $price;

    }

    private function getCode(){
        return $this->code;
    }

    private function setCode(){
        return $this-> code;
    }

    private function getDescription(){
        return $this->description;
    }

    private function setDescription(){
        return $this-> description;
    }

    private function getQtd(){
        return $this->qtd;
    }

    private function setQtd(){
        if($this->qtd < 0){
            return $this->qtd = 0;
        }
        return $this-> qtd;
    }

    private function getPrice(){
        return $this->price;
    }

    private function setPrice(){
        if($this->price < 0){
            return $this->price = 0;
        }
        return $this-> price;
    }

    private function getInvoiceAmount(){
        $valorTotal;
        return $this->qtd * $this->price = $valorTotal;
    }




?>