<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>005</title>
</head>

<body>
    <h1>Concatenação de strings</h1>

    <?php
    //Nas aspas duplas, exite a interpretação do conteúdo

    $casa = "casa";
    $branca = "branca";
 
    echo "moro em uma $casa ";

    //aspas simples mostra astring como foi escrita, não importa se tem uma variável ou não.
    echo 'Ela é $branca ';

    //para interpretar uma const
    const ESTADO = "SP";
    echo "Moro em ". ESTADO;
    ?>

    <br>

    <?php 
        $nome = "Rodrigo";
        $snome = "Nogueira";

        //sequência de escape
        echo "$nome \"Minotauro\" $snome";
    ?>

    
</body>

</html>