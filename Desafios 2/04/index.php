<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=[device-width], initial-scale=1.0">
    <title>Anatomia de uma divisão</title>
</head>

<body>

    <?php

    $nota1 = $_GET['nota1'] ?? "1";
    $nota2 = $_GET['nota2'] ?? "1";
    $p1 = $_GET['p1'] ?? "0";
    $p2 = $_GET['p2'] ?? "0";

    ?>

    <main>
        <h1>Calculando a média</h1>
        </h1>

        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">

            <label for="nota1">Informe a primeira nota: </label>
            <input type="number" name="nota1" value="<?= $nota1 ?>" step="1" min="0"> <br>
            <label for="p1">Informe o peso da primeira prova: </label>
            <input type="number" name="p1" value="<?= $p1 ?>" step="1" min="0"> <br>

            <label for="nota2">Informe a segunda nota: </label>
            <input type="number" name="nota2" value="<?= $nota2 ?>" step="1" min="0"> <br>
            <label for="p2">Informe o peso da segunda prova: </label>
            <input type="number" name="p2" value="<?= $p2 ?>" step="1" min="0"> <br>

            <input type="submit" value="Enviar">
        </form>
    </main>

    <section>
        <?php
            $mSimples = ($nota1 + $nota2) / 2;
            

            echo "A Média simples é: " .number_format($mSimples, 1, ",", ".");
            echo "<br>";

            $mPonderada = ($nota1 * $p1 + $nota2 * $p2) / ($p1 + $p2) ;

            echo "A média ponderada é: ".number_format($mPonderada, 2, ",", ".");
        ?>
    </section>
</body>

</html>