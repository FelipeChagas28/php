<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>004</title>
</head>

<body>
    <h1>Tipos primitivos</h1>
    <?php
    $var1 = "escalares";
    $var2 = "compostos";
    $var3 = "especiais";

    echo "String, INT, FLOAT e Boolean são tipos primitivos " . $var1;
    ?>

    <br>

    <?php
    echo "array e object são tipos " . $var2;
    ?>

    <br>

    <?php
    echo "null, resource, callabe e mixed são tipos " . $var3;
    ?>

    <br>

    <?php
    // 0x = hexadecimal, 0b = binário e 0 = octal
    $num = 0x1010;
    echo "O valor da variável é $num";
    ?>

    <br>

    <h1>Para ver o tipo da variável</h1>

    <?php
    $v = 40;
    var_dump($v);
    ?>
</body>

</html>