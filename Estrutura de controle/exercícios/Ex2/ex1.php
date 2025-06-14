<?php 
    $valor1 = $_POST['valor1'];

    $par = $valor1 % 2;

    //Se o resto da divisão do $valor for 0...
    if ($valor1 % 2 == 0){
        echo "$valor1 é par!";
    } else {
        echo "$valor1 é impar!";
    }
?>

