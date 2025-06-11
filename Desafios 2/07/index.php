<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=[device-width], initial-scale=1.0">
    <title>Anatomia de uma divisão</title>
</head>

<body>

    <?php

    $segundos = $_GET['segundos'] ?? "1";

    ?>

    <main>
        <h1>Calculando segundos</h1>
        </h1>

        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">

            <label for="nota1">Informe os segundos: </label>
            <input type="number" name="segundos" value="<?= $segundos ?>" step="1" min="0"> <br>

            <input type="submit" value="Enviar">
        </form>
    </main>

    <section>
        <?php 
           $minutos = $segundos / 60;
           $hora = $segundos / 3600;
           $dia = $segundos / 86400;
           $semana = $segundos / 604800;

           echo "Minutos: ". number_format($minutos, 0, ",", ".") . "<br> Horas: ". number_format($hora, 0, ",", ".") . "<br> Dias: ". number_format($dia, 0, ",", ".") . "<br> Semanas: ". number_format($semana, 0, ",", ".") . "<br>"; 
        ?>
    </section>
</body>

</html>