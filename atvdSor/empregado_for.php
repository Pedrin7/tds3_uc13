<?php
    require_once ("Database.php");

    $db = new Database();
    $con = $db->connect();

    $sql = "SELECT * FROM empregado";
	$rs = $con->query($sql);

	$status = $rs->execute();
	$dados = $rs->fetchAll();
	$total_registros = $rs->rowCount();

	for ($i = 0; $i< sizeof($dados); $i++){
		echo "Nome: ".$dados[$i]["nome"]."<br>";
	}

	$db->close();
?>