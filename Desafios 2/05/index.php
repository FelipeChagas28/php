<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=[device-width], initial-scale=1.0">
    <title>Anatomia de uma divisão</title>
</head>

<body>

    <?php

    $nasc = $_GET['nasc'] ?? "1";
    $ano = $_GET['ano'];
    

    $data = date("Y");

    ?>

    <main>
        <h1>Calculando a idade</h1>
        </h1>

        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">

            <label for="nota1">Informe o ano que você nasceu: </label>
            <input type="number" name="nasc" value="<?= $nasc ?>" step="1" min="0"> <br>

            <label for="p1">Quer saber a idade em que ano? <?= "estamos em <strong>$data</strong>" ?> </label>
            <input type="number" name="ano" value="<?= $ano ?>" step="1" min="0"> <br>

            <input type="submit" value="Enviar">
        </form>
    </main>

    <section>
        <?php 
            $idade = $ano - $nasc;

            echo "Você nasceu em $nasc e no ano $ano terá $idade";
        ?>
    </section>
</body>

</html>