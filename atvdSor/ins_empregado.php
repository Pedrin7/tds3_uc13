<?php
	require_once "empregado.php";

	$empregado = new Empregado();
	$empregado->__set("noMatricula", "0001");
	$empregado->__set("nome", "Maria");
	$empregado->__set("sobrenome", "Silva");
	$empregado->__set("dataContratacao", "2020-01-01");
	$empregado->__set("dataNascimento", "1990-01-01");

	$empregado->inserir();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

</body>
</html>