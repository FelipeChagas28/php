<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
</head>

<body>
    <?php
    $n1 = 5;
    $n2 = 7;

    $operacao = "+";

    //Switch é usado para validar operações
    switch ($operacao) {
        //Valores que ele aguarda
        case '+':
            echo "Soma: " . $n1 + $n2;
            break;
        case '-':
            echo "Subtração: " . $n1 - $n2;
            break;
        case '*':
            echo "Multiplicação: " . $n1 * $n2;
            break;
        case '/':
            echo "Divisão: " . $n1 / $n2;
            break;
        
        //Se ele não receber nenhum dos quatro, retorna default
        default: //Último caso do switch.
            echo "Operação inválida";
    }

    ?>
</body>

</html>