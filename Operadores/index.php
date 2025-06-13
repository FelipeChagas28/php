<?php
$a = "a";
$b = "a";
$c = "b";
$d = "1";
$e = 1;
$f = 2;

echo "<h1>Comparadores</h1>";

echo 'A variavel <strong>$a</strong> é igual a variavel <strong>$c</strong>? = ';

//Operador de igualdade
$igualdade = $a == $c; // Compara apenas VALORES contidos na variavel
var_dump($igualdade); //quando usado o operador ==, é voltado um valor booleano.
echo "<hr> <br>";

echo 'A variavel <strong>$a</strong> é idêntica a <strong>$b</strong>? = ';

//Operador para ver se é idêntico
$identico = $a === $b; //Compara VALORES e TIPO da variavel
var_dump($identico); //quando usado o operador ===, é voltado um valor booleano.
echo "<hr> <br>";

echo 'A variavel <strong>$b</strong> é diferente de <strong>$e</strong>? = ';

//Operador para ver se é diferente
$diferente = $d != $e; //Diferente valida um valor
var_dump($diferente); //quando usado o operador !=, é voltado um valor booleano.
echo "<hr> <br>";

echo 'A variavel <strong>$e</strong> é <strong>maior</strong> que <strong>$f</strong>? = ';

//Maior e Menor
$maior = $e > $f;
$menor = $e < $f;
$menorigual = $e <= $f;
var_dump($maior);
echo "<br>";

echo 'A variavel <strong>$e</strong> é <strong>menor</strong> que <strong>$f</strong>? = ';
var_dump($menor);
echo "<br>";

echo 'A variavel <strong>$e</strong> é <strong>menor ou igual</strong> que <strong>$f</strong>? = ';
var_dump($menorigual);
echo "<hr> <br>";

echo "<h1>Operadores lógicos</h1>";

//OR
$or = ($a == $b || $e >= $f);
var_dump($or);
echo "<hr> <br>";

//AND
$and = ($a == $b && $e >= $f);
var_dump($and);
echo "<hr> <br>";

