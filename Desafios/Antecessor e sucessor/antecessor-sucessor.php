<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antecessor e sucessor</title>
</head>

<body>
    <h1>Antecessor e sucessor</h1>

    <?php 
        $numero = $_GET['numero'] ?? 0;

        $antecessor = $numero - 1;
        $sucessor = $numero + 1;

        echo "O número é: " . $numero . ", seu antecessor é: " . $antecessor . ", e seu sucessor é: " . $sucessor;
    ?>
</body>

</html>