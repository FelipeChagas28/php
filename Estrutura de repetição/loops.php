<?php 
    $pessoas = [
        ['id' => 1, 'nome' => 'Marcos'],
        ['id' => 2, 'nome' => 'Felipe'],
        ['id' => 3, 'nome' => 'Ana'],
        ['id' => 4, 'nome' => 'Bia']
    ];

    //For

    echo "<h1>FOR</h1>";

    //Variável de controle começa em 0; Condição para loop; Toda vez que executar o loop, adiciona +1 para a variável de controle. 
    for($i = 0; $i < count($pessoas); $i++){
        echo "O cliente " . $pessoas[$i]['nome'] . " que possui o id " . $pessoas[$i]['id'] . "<br> ";
    }

    echo "<hr>";

    //While

    echo "<h1>WHILE</h1>";

    $i = 0;
    while ($i < count($pessoas)){
        echo "O cliente " . $pessoas[$i]['nome'] . " que possui o id " . $pessoas[$i]['id'] . "<br> ";
        $i++;
    }

    //FOREACH

    echo "<h1>FOREACH</h1>";

    foreach($pessoas as $chave => $valor){
        echo "O cliente " . $valor['nome'] . " que possui o id " . $valor['id'] ." está no indice " . $chave . "<br> ";
    }

?>