<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteador de números</title>
</head>
<body>
    <h1>Sorteador de número aleatório</h1>

    <?php 
        $num = rand(0, 100);

        echo "<h1>$num</h1>";
    ?>

    <button onclick="javascript:document.location.reload()">Gerar outro</button>

</body>
</html>