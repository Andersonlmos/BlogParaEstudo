<?php
// Operador Ternário
/* É um operadore condicional que pode substituir uma estrutura simples, IF ELSE, o operador necessita de três expressões ou áreas.
1- A expressão que será avaliada como verdadeira.
2- A expressão que será executada com o true.
3- A expressão que será executada com o false.*/

$opcao = 0;
$nome = $opcao == 1 ? 'Joao' : 'Antonio';

// Podemos usar também da seguinte forma:
$opcao == 1 ? $nome = 'Joao' : $nome = 'Antonio';

//Podemos usar o operador ternário em varias situações.
//Como apresentar um determinado texto.

echo $opcao == 1 ? 'SIM' : 'NAO';

?>

<!-- Com instrução condicional IF -->

<?php if ($opcao == 1): ?>
    <h2>SIM</h2>
<?php else: ?>
    <h2>NAO</h2>
<?php endif; ?>

<!-- Com o perador ternario --->
 <h2><?= $opcao == 1 ? 'SIM' : 'NAO' ?></h2>

 <!-- Por exemplo, para controlar o CSS -->
  <h2 style="color: <?=$opcao == 1 ? 'red' : 'blue' ?>">Este texto tem cor definida pelo o PHP</h2>