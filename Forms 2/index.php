<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=[device-width], initial-scale=1.0">
    <title>Superglobais</title>
</head>

<body>

    <?php
    $v1 = $_GET['v1'] ?? "0";
    $v2 = $_GET['v2'] ?? "0";
    ?>

    <main>
        <h1>Enviando dados na mesma página</h1>
        </h1>

        <!-- Com o $_SERVER['PHP_SELF'], vc consegue usar dados enviados do form na mesma página -->
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="v1">Valor 1</label>
            <!-- Com esse tipo de value, quando vc voltar a página, ele irá colocar o resultado digitado anteriormente. -->
            <input type="number" name="v1" id="nome" value="<?= $v1 ?>">

            <label for="v2">Valor 2</label>
            <!-- Com esse tipo de value, quando vc voltar a página, ele irá colocar o resultado digitado anteriormente. -->
            <input type="number" name="v2" id="v2" value="<?= $v2 ?>">

            <input type="submit" value="Enviar">
        </form>
    </main>

    <section>
        <?php
            $soma = $v1 + $v2;

            echo "A soma de $v1 + $v2 é $soma";
        ?>
    </section>
</body>

</html>