<?php
/* Operadores de comparação
Permitem efetuar uma comparação entre valores, verificam se os valores são iguais, diferentes, maiores ou menores, ou do mesmo tipo.
O resultado de comparação será sempre o valor verdadeiro (True) ou falso (False).*/

// Valores são iguais?
$a = (2 == 3); # false
$a = (100 == 100); # true
$a = (50 == '50'); # true
$a = (50 === '50'); # false

// Valores são diferentes?
$a = (2 != 3); # true
$a = (2 <> 3); # true (alternativo)
$a = (50 != 50); # false
$a = (50 != '50'); # false
$a = (50 === '50'); #true

// Valores são maiores ou menores?
$a = (2 > 3); # false
$a = (2 < 3); # true
$a = (50 >= 50); # true
$a = (50 <= 50); # true
$a = (50 < 50); # false

// No PHP 7 foi adicionado um novo operador de comparação,
// Designado por spaceship operator

$x = 1 <=> 1; # 0 (1 == 1)
$x = 3 <=> 2; # 1 (3 > 2)
$x = 1 <=> 2; # -1 (1 < 2)

