<?php 
    $valor1 = $_POST['valor1'];

    if ($valor1 > 100){
        $desconto = $valor1 * 0.15;
        echo "Valor maior que 100, então será aplicado um desconto de 15%. O valor final é: " . $valor1 - $desconto;
    } else {
        $desconto = $valor1 * 0.05;
        echo "Valor é menor ou igual que 100, então será aplicado um desconto de 15%. O valor final é: " . $valor1 - $desconto;
    }
?>

