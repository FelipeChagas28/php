<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Analisador de número real</h1>

    <?php
    $numero = $_GET["numero"] ?? 0;

    $int = (int)$numero;
    $fracionado = $numero - $int;

    echo "O número <strong>" .number_format($numero, 3, ",", ".") ."</strong> na sua forma inteira é <strong>". number_format($int, 0, ",", ".") ."</strong> e sua parte fracionada é <strong>" . number_format($fracionado, 3, ",", "."). "</strong>";
    
    ?>


</body>

</html>