<?php
/* Strings são váriaveis muito especiais dentro do PHP, existem dezenas de funções para o tratamento de strings. Podemos apresentar um determinado caraccter de uma string da seguinte forma. */
$frase = 'Esta frase têm 29 caracteres.';
$n = '<br>';
echo $frase[0], $n; #apresenta o primeiro caracter da frase.

// Podemos comparar strings da seguinte forma:
$a = 'João';
$b = 'Carlos';
$c = ($a == $b); // false
$d = ($a != $b); // true

// funções nativas no PHP para operar com strings.
$frase = 'Esta frase têm 29 caracteres';
echo $frase, $n;

#Retorna o numero total de caracteres.
$numero_total_caracter = strlen($frase);
echo $numero_total_caracter, $n;

#Retorna as letras a partir da posição 0 e durante 4 caracteres.
$primeira_palavra = substr($frase, 0, 4); #Esta

#Converte toda a string em maiusculas
$todas_maiusculas = strtoupper($frase);

#Converte toda a string em minusculas
$todas_minusculas = strtolower($frase);

#Substitui uma letra por outra
$nova_frase = str_replace('a', 'x', $frase);

#Verifica qual a posição de um caracter dentro da string
$posicao = strpos($frase, 'a');
echo $posicao;
 
//No PHP 8 foram introduzidos mais algumas funções para usar com strings,
$nome = 'Ana Maria Silva Cardoso';
$x = str_starts_with($nome, 'Ana'); # True
$x = str_starts_with($nome, 'ana'); # False
$x = str_contains($nome, 'Silva'); # True
