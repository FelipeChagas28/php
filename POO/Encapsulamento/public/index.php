<?php 

require_once "carros.php";

$carros = new Carros("HB20", "hyudai", "2022");

echo $carros->modelo . "<br>";
echo $carros->marca . "<br>";
echo $carros->ano . "<br>";

echo "<br>";

$carros->exibirDetalhesCarros();
?>