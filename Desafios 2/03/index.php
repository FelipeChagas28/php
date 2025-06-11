<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=[device-width], initial-scale=1.0">
    <title>Anatomia de uma divisão</title>
</head>

<body>

    <?php
    $n = $_GET['n'] ?? "1";

    ?>

    <main>
        <h1>Enviando dados na mesma página</h1>
        </h1>

        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="v1">Informe um número</label>
            <input type="number" name="n" value="<?= $n ?>" step="1" min ="0">

            <input type="submit" value="Enviar">
        </form>
    </main>

    <section>
        <?php

        $raiz = sqrt($n);
        $cubica = pow($n, 1/3);

        echo "O número $n tem sua raiz quadrada " . number_format($raiz, 3, ",", ".") . " e sua raiz cúbica " .number_format($cubica, 3, ",", ".");

        ?>
    </section>
</body>

</html>