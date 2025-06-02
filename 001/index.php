<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste</title>
</head>
<body>
    <h1>
        <?php 
            echo "super tag PHP";
        ?>
    </h1>

    <h1>
        <? echo "Short open tag"; ?>
    </h1>

    <h1>
        <!-- Essa não funciona nas versões recentes
            <% echo "ASP tag"; %> 
        -->
    </h1>

    <h1>
        <!-- A tag mais usada -->
        <?=  "<p>Short tag PHP</p>" ?>
    </h1>

    <?php 
        $nome = "Felipe";
        echo "$nome"
    ?>
</body>
</html>