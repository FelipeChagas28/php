<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções Aritméticas do PHP</title>
</head>
<body>
    <h1>Valor absoluto</h1>
    <?php 
        $absoluto = abs(-30);
        print("O valor absoluto de é $absoluto <br>");
    ?>

    <br>

    <h1>Conversor de base</h1>

    <?php 
        $numero = 32;

        $binario = base_convert($numero, 10, 2);
        $octal = base_convert($numero, 10, 8); 
        $hexadecimal = base_convert($numero, 10, 16);

        echo "O número $numero em binário é <strong>$binario</strong> <br>";
        echo "O número $numero em binário é <strong>$octal</strong> <br>";
        echo "O número $numero em binário é <strong>$hexadecimal</strong> <br>";
    ?>

    <h1>IntDiv</h1>

    <?php 
        $num = intdiv(5, 2);
        echo "A resposta é $num <br>";
    ?>

    <h1>Max e Min</h1>

    <?php 
    
        $num = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

        //Mostra o maior numero de $num
        $max = max($num);
        //Mostra o menor numero de $num
        $min = min($num);

        echo "O maior número é $max <br>
        O menor número é $min <br>";
    ?>

    <h1>Raiz quadrada</h1>
    <?php 
        $num = 81;
        $raiz = sqrt($num);
        echo "A raiz quadrada de $num é <strong>$raiz</strong> <br>";
    ?>
</body>
</html>