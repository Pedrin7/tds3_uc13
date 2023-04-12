<?php
	//' or '1'='1
	//'; desc 'empregado';
	$nome = $_POST['nome'];
	$con = new PDO("mysql:host=localhost;dbname=ponto_eletronico;port=3307", "root", "");

    /*
	$sql = "SELECT * FROM empregado WHERE nome = '".$nome."'";
	//echo $sql;
	$rs = $con->query($sql);

	$statuso = $rs->execute();
	$dados = $rs->fetchAll();
	$total_registros = $rs->rowCount();
    */
    $sql = "SELECT * FROM empregado where nome = :var1 LIMIT 100";
    $st = $con->prepare($sql);
	$st -> bindParam->(':var1', $nome);
    $statuso = $st->execute();

    $dados = $st->fetchAll();


	for ($i = 0; $i< sizeof($dados); $i++){
		echo "Nome completo: ".$dados[$i]["nome"]. " ".$dados[$i]["sobrenome"]."<br>";
	}
	
	
	$con = null;
	
?>