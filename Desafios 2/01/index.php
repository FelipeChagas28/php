<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=[device-width], initial-scale=1.0">
    <title>Anatomia de uma divisão</title>
</head>

<body>

    <?php
    $v1 = $_GET['v1'] ?? "1";
    $v2 = $_GET['v2'] ?? "1";
    ?>

    <main>
        <h1>Enviando dados na mesma página</h1>
        </h1>

        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="v1">Valor 1</label>
            <input type="number" name="v1" id="nome" value="<?= $v1 ?>">

            <label for="v2">Valor 2</label>
            <input type="number" name="v2" id="v2" value="<?= $v2 ?>">

            <input type="submit" value="Enviar">
        </form>
    </main>

    <section>
        <?php
            $divisao = $v1 / $v2;
            $resto = $v1 % $v2;

            echo "$v1 divido por $v2 é " . number_format($divisao, 0, ",", "."). ", e tem resto de $resto"
        ?>
    </section>
</body>

</html>