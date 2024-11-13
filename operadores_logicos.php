<?php
/* Os operadores lógicos são frequentemente usados com os operadores de comparação, ele permitem ligar varias comparações, avaliando se são verdadeiros (true) ou falsos (false).*/

$a = 100;
$b = 200;

$x = ($a < $b) && ($a < 1000); # AND -> True
$x = ($a > $b) || ($a > 1000); # OR -> False
$x = ($a < 150) && ($b > 300); # False
$x = ($a > 10) || ($b > 500); # True
// Os operadores mais utilizados são:
// && / || / AND / OR / XOR

$x = (10 > 5) && (20 > 30); 
$x = (True && False); #False

$x = (2 > 1) && (3 > 2);
$x = (True && True); #True

$x = (2 < 4) || (4 > 10);
$x = (True || False); #True

$x = (2 == 3) || (3 > 1);
$x = (False || True); #True

// Operador Logico NOT
$a = False;
$x = !$a; # NOT -> True

# NOTA:
/* Existem os operadores BitWise, servem para analisar valores binários de números. Existe precedência de operadores. Vamos ser ao longo do curso com exemplos. */