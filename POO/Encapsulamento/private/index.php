<?php 

require_once "veiculos.php";

$carros = new Veiculos("HB20", "hyudai", "2022");

$carros->setMarca("Palio");
$carros->setModelo("Fiat");
$carros->setAno("1999");

echo $carros->getMarca() . "<br>";
echo $carros->getModelo() . "<br>";
echo $carros->getAno() . "<br>";

echo "<br>";

$carros->exibirDetalhesCarros();
?>