<?php 

    require_once "funcionario.php";
    require_once "departamento.php";

    $f1 = new Funcionario("João", "Gerente");
    $f2 = new Funcionario("Maria", "Supervisora");
    $f3 = new Funcionario("Felipe", "Encarregado");

    $d = new Departamento("T.I");

    $d->adicionarFuncionarios($f1);
    $d->adicionarFuncionarios($f2);
    $d->adicionarFuncionarios($f3);

    $d->listarFuncionarios();
?>