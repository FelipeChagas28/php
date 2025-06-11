<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=[device-width], initial-scale=1.0">
    <title>Anatomia de uma divisão</title>
</head>

<body>

    <?php

    $valor = $_GET['valor'] ?? "5";

    ?>

    <main>
        <h1>Caixa</h1>


        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">

            <label for="nota1">Informe o valor do saque (R$): </label>
            <input type="number" name="valor" value="<?= $valor ?>" step="5" min="5"> <br>

            <p>Notas disponíveis; <strong>R$100, R$50, R$20, R$10 e R$5</strong></p>
            <input type="submit" value="Enviar">
        </form>
    </main>

    <section>
        <?php
            $resto = $valor;

            $cem = floor($resto / 100);
            $resto %= 100;

            $cinquenta = floor($resto / 50);
            $resto %= 50;

            $vinte = floor($vinte / 20);
            $resto %= 20;

            $dez = floor($resto / 10);
            $resto %= 10;

            $cinco = floor($resto / 5);
            $cinco %= 100;

            

            echo "R$100 x " .number_format($cem, 0, ",", ".");
            echo "<br> R$50 x " .number_format($cinquenta, 0, ",", ".");
            echo "<br> R$20 x " .number_format($vinte, 0, ",", ".");
            echo "<br> R$10 x " .number_format($dez, 0, ",", ".");
            echo "<br> R$5 x " .number_format($cinco, 0, ",", ".");
        ?>
    </section>
</body>

</html>