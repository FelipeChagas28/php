<?php 

require_once "funcionario.php";
require_once "gerente.php";

$g = new Gerente("Felipe", 1500, "Gerente");

echo $g->apresentarFuncionario();
echo "<br>";
echo $g->gerarBonus();

?>