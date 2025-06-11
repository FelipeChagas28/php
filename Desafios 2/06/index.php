<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=[device-width], initial-scale=1.0">
    <title>Anatomia de uma divisão</title>
</head>

<body>

    <?php

    $valor = $_GET['valor'] ?? "1";
    $reajuste = $_GET['reajuste'] ?? "1";


    ?>

    <main>
        <h1>Calculando reajuste de preço</h1>
        </h1>

        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">

            <label for="nota1">Valor: </label>
            <input type="number" name="valor" value="<?= $valor ?>" step="1" min="0"> <br>

            <label for="reajuste">Porcentagem do reajuste: <strong><span id="p">?</span>%</strong></label>
            <input type="range" id="reajuste" name="reajuste" max="100" step="1" min="0" oninput="mudaValor()"> <br>

            <input type="submit" value="Enviar">
        </form>
    </main>

    <section>
        <?php
        $porcentagem = $reajuste / 100;
        $valorReajustado = $valor * $porcentagem;

        $total = $valor + $valorReajustado;

        echo "O valor R$" . number_format($valor, 2, ",", ".") . " com um reajuste de $reajuste% vai para R$" . number_format($total, 2, ",", ".");
        ?>
    </section>

    <!-- javascript -->
    <script>
        function mudaValor() {
            p.innerText = reajuste.value;
        }
    </script>
</body>

</html>