<?php 
    //Chamando o arquivo da class Pessoa
    require_once "class.php";

    //Instanciando a classe Pessoa
    $p = new Pessoa("Maria", 30);
    //Acessando os atributos e métodos da classe
    echo "Olá, me chamo " .$p->nome . " e tenho " . $p->idade . " anos!";
    echo "<br>";
    var_dump($p);

    echo "<br>";

    $p2 = new Pessoa("Felipe", 22);
    echo $p->nome . " e " . $p2->nome . " são amigos!";
?>