<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>

<body>

    <!-- Função básica -->

    <?php
    function teste()
    {
        echo "<h1>Função básica sem parâmetros</h1>";
    }
    ?>

    <p>
        <?php teste(); ?>

        Função básica sem parâmetros para fazer um título em HTML.

    </p>

    <br>
    <!-- Função com parâmetros -->

    <?php
    function parametros($p)
    {
        echo "<h1>Função com parâmetros</h1>";
        echo "Oi, meu nome é " . $p . "!";
    }

    parametros("Felipe");
    ?>

    <br>

    <!-- Função com retorno -->

    <?php
    function funcaoComRetorno($n1, $n2)
    {   
        echo "<h1>Função com retorno</h1>";
        $soma = $n1 + $n2;
        return $soma;
    }

    $total = funcaoComRetorno(2, 10);
    echo "a soma é " . $total;
    ?>

    <br>



    
</body>

</html>