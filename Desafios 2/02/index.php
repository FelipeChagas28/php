<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=[device-width], initial-scale=1.0">
    <title>Anatomia de uma divisão</title>
</head>

<body>

    <?php
    $salario = $_GET['salario'] ?? "1";

    ?>

    <main>
        <h1>Enviando dados na mesma página</h1>
        </h1>

        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="v1">Informe seu salario</label>
            <input type="number" name="salario" value="<?= $salario ?>" step="0.01" min ="0">

            <input type="submit" value="Enviar">
        </form>
    </main>

    <section>
        <?php

        $sminimo = 1518;   
    
            echo "O salário mínino está R$" .number_format($sminimo, "0", ",", ".");
            echo "<br>";

        $qtdesal = $salario / $sminimo;
        $restosal = $salario % $sminimo;

           echo "O valor R$" .number_format($salario, 2, ",", "."). " é equivalente a <strong>" .(int)$qtdesal . "</strong> salários míninimos e R$" .number_format($restosal, 2, ",", ".") ;

        ?>
    </section>
</body>

</html>