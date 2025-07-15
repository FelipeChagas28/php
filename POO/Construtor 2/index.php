<?php 

require_once "eletronicos.php";
require_once "tv.php";

$tv = new Tv("smart", 40, "LG");
$tv->apresentar();

?>