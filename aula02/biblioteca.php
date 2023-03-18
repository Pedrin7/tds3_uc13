<?php

require ("aumento_biblioteca.php");

$salario = 100;
$aumento = 10;

$novo_salario = ajusta_salario($salario,$aumento);

echo "O novo salário é: R$ ".$novo_salario;


?>