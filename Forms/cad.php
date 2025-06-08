<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bem vindo!</h1>
    <?php 
        $nome = $_GET['nome'] ?? 'desconhecido';
        $sobrenome = $_GET['sobrenome'] ?? 'desconhecido';

        echo "Bem vindo, $nome $sobrenome!";
    ?>
</body>
</html>