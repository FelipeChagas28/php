<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Match</title>
</head>

<body>
    <?php
    $n1 = 5;
    $n2 = 7;

    $operacao = "*";

    //Match compara valores idênticos e retorna um valor.
    $retorno = match ($operacao) {
        //Valores que ele aguarda
        '+' => "Soma: " . $n1 + $n2,
        '-' => "Subtração: " . $n1 - $n2,
        '*' => "multiplicação: " . $n1 * $n2,
        '/' => "Divisão: " . $n1 / $n2,

        //Se ele não receber nenhum dos quatro, retorna default
        default => "Operação inválida!"
    };

    echo $retorno;


    ?>
</body>

</html>