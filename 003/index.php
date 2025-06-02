<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>003</title>
</head>

<body>
    <h1>Variáveis e constantes</h1>
    <?php
    $nome = "Felipe";
    $sobrenome = "Chagas";
    $idade = 21;

    // Constantes não mudam de valor e  não precisam do "$"
    const PAIS = "Brasil";

    echo "$nome $sobrenome tem $idade e mora no " . PAIS;
    ?>

</body>

</html>