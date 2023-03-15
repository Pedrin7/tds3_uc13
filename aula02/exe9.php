<?php
//tamanho da string
$nome = "maria da silva";
$codigo = "   phpp17    ";

echo "Tamanho: ".strlen($nome);
echo "<br>";

//strtolower = deixa todas as letras minusculas

echo "Tamanho: ".strtolower($nome);
echo "<br>";

//strtoupper = todas as letras maiusculas

echo "Tamanho: ".strtoupper($nome);
echo "<br>";

//ucfirst = deixa  a primeria letra da primera palavra maiuscula

echo "Tamanho: ".ucfirst($nome);
echo "<br>";

//ucwords = deixa a primeira letra de todas as palavras em maiusculo

echo "Tamanho: ".ucwords($nome);
echo "<br>";


//str_starts_with = ve se inicia com tal caractere ou palavra
echo "<br><br>";
if(str_starts_with($codigo, "AAA")){
    echo $codigo. " -Código válido.";

}
else{
    echo $codigo. " -Código Inválido";
}

//ltrim = remove os espaços da esquerda



//rtrim = remove os espaços da direita



//trim = remove os espaços da direita e da esquerda

$codigo_limpo = trim($codigo);
    echo "<br>";

if(empty(trim($codigo))){
    echo "Esta Vazio";

}

if(strlen(trim($codigo)) == 0){
    echo "<br> Está vazio 2";

}

$str = "Hello Friend";

$arr1 = str_split($str);
$arr2 = str_split($str, 3);

echo "<pre>";
print_r($arr1);
echo "</pre>";

echo "pre";
print_r($arr2);
echo "</pre>";

$cadastro = "Pedro;pedropaim987@gmail.com;20;Rua Nová Petrópolis,CO,133";
$array_cadastro = explode(";", $cadastro);
echo "<pre>";
print_r($array_cadastro);
echo "</pre>"




?>