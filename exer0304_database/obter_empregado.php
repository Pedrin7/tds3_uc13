<?php

    class empregado{

        public function obterDados(){
            include_once "Database.php";

            $db = new Database();
            $con = $db->conect();

            $sql = "SELECT * FROM empregado";
            $rs = $con->query($sql);

	        $status = $rs->execute();
	        $dados = $rs->fetchAll();
	        $total_registros = $rs->rowCount();

	        $db->close();

        }
    }

?>