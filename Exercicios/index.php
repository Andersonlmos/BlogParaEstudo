<?php
# Exercicio 01
 /*1.Crie um script index.php;
 2.Defina duas variáveis: o seu nome e o seu sobrenome;
 3.Na estrutura básica de HTML,apresente um título estático do tipo h3 com  o texto "O meu nome é:";
 4.Apresentar uma tag h1 o nome ompleto a partir das variaveis iniciadas no ponto 2.*/

# Exercicio 02
 /*1.Crie um  ficheir index.php
 2.Defina as variaveis nome e sobrenome com os respectivos valores
 3.Apresente o nome completo num paragrafo de HTML
 4.No segundo paragrafo apresente o seguinte:
 O meu nome tem x caracteres.
 Sendo x o calculo do total de caracteres do seu nome.
*/
//definição das variaveis
$nome = 'Anderson';
$sobrenome = 'Lemos';
$nome_completo = "$nome $sobrenome";
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio02.1</title>
</head>
<body>
<h3>O meu nome é:</h3>
<h1><?php echo $nome . ' ' . $sobrenome?></h1>
<br>
<p><?=$nome_completo?></p>
<p><?="O meu nome tem " . strlen($nome_completo) . " caracteres."?></p>
<p><?="O meu nome é " . strtoupper($nome) . "e meu apelido é " . strtoupper($sobrenome)?></p>

</body>
</html>