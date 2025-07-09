<?php 

    require_once "cliente.php";
    require_once "pedido.php";

    $c = new Cliente("Felipe", "felipe@gmail.com");
    $p = new Pedido(1, 23.93, $c);

    $p->apresentarPedido();
?>