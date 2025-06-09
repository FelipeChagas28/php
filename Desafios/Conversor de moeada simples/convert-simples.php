<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor simples (fixo)</title>
</head>
<body>
    <h1>Valor convertido</h1>

    <?php 
        $valor = $_GET['valor'];

        $dolar = $valor / 5.58;

        echo "O valor convertido para dolar (5,58) é: R$" . $dolar;
    ?>

    <br>

    <a href="convert-simples.html">Voltar</a>
</body>
</html>