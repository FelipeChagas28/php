<?php 
    $teste = "Teste testando testei";

    //str_contains retorna true ou false se na vairiável $teste tem a palavra 'testando'.
    var_dump(str_contains($teste, 'testando'));
    echo "<br>";

    //str_start_with retorna true ou false se na vairiável $teste começa com a palavra 'testando'.
    var_dump(str_starts_with($teste, 'testando'));
    echo "<br>";

    //str_contains retorna true ou false se na vairiável $teste termina com a palavra 'testando'.
    var_dump(str_ends_with($teste, 'testando'));
    echo "<br>";


    $testepad = "Oi";

    //Defini o número de casas da string como "5", e se não tiver palavras suficientes, adiciona X na esquerda
    $padl = str_pad($testepad, 5, 'X' ,STR_PAD_LEFT );

    //Defini o número de casas da string como "5", e se não tiver palavras suficientes, adiciona X na direita
    $padr = str_pad($testepad, 5, "X", STR_PAD_RIGHT );

    echo $padl;
    echo "<br>";
    echo $padr;

    
?>