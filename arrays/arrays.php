<?php

//Array normal.
$num = [1, 2, 3, 4, 5, 7];

//Array associativos.
$frutas = [

    //definido a posição "A", ela recebe o valor "banana".
    "A" => "Banana",
    "B" => "Maçâ",
    "C" => "Uva",
    "D" => "Pera",
    "E" => "Morango"

];


//print_r($num);
//print_r($frutas);

//Imprimindo o array $frutas na posição (indice) "B".
echo "$frutas[B] \n";
echo "$num[0] \n";

echo "<br>";

//Adicionando mais uma posição no Array.
$num [] = 6;
array_push($num, 8, 9); //Outra forma de adicionar um indice em um array.

//sort usado para deixar certo a ordenação do array.
sort($num);

//contantdo quantas posições tem um array.
$totalArray = count($num);
echo "Esse array num tem $totalArray posições";
print_r($num);

//Para excluir um indice de um array.
unset($num[7]);
echo "<br>";
print_r($num);

echo "<br>";

//Adicionando indices no array associativo
$frutas['F'] = "Goiaba";
$frutas['G'] = "Abacaxi";

print_r($frutas);