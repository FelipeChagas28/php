<?php 

require_once "construtor.php";

$p = new Produto();
$p->setDescricao("Teclado");
$p->setPreco(120.00);

$p->apresentarProduto();


?>