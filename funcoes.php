<?php 
/*-------------------- CRIAÇAO DE FUNÇÕES ------------------
São blocos de códigos identificados por um nome e uma assinatura e que perimitem que o código seja resutilizado de uma forma muito mais consistente.
Estes blocos só são executados quando são solicitados, Definimos uma função usando a palavra chave "function" seguida de um nome, um conjunto de parêntenses e um bloco de código.*/ 
echo 'Inicio da aplicação.';
echo'<br>';
function executar()
{
    echo 'A função foi executada.';
}
executar();
echo '<br>';
echo '<hr>';

/*--------------- PARÂMETROS DE FUNÇÔES -----------------------
Uma função tem um nome e um conjunto de parênteses, dentro desses parênteses, podemos definir um conjunto de parâmetros (assinaturas da função).*/

function adicao($a, $b){
  // código da função aqui...
}

/*Nesta função adicao, temos dois parâmetros $a e $b. São duas variáveis de PHP que vão existir dentro da função, os parâmetros permitem passar valores para dentro de uma função quando ela é chamada, os parâmetros são separados por vírgulas.*/ 

adicionar(10, 20);
function adicionar ($x, $y){
    echo "$x + $y = " . $x + $y;
    echo '<br>';
    echo "$x + $y = " . ($x + $y);
}
echo '<br>';
echo '<hr>';


$nomes = ['Joana', 'Ana', 'Paulo', 'Pedro'];
foreach($nomes as $nome){
    saudacao($nome);
}
function saudacao($valor){
    echo "Bom dia, $valor. <br>";
}
echo '<hr>';

/*Para ser mais preciso, parâmetros é o nome das variáveis existentes na definição da função. Argumentos são os dados passados quando a função é chamada.*/ 



/*----------------- PARÂMETROS OPCIONAIS ---------------------
Podemos criar funções que têm parâmetros com um valor pré definido, A chamada dessas funções não obriga a definir argumentos para esses parametros.*/ 

function multiplicar($p, $q = 2){
    //codigo aqui
    echo $p * $q;
}
multiplicar(10); # $p = 10 e $q = 2
echo '<br>';
multiplicar(10, 20); # $p = 10 e $q = 20
echo '<hr>';

//Os parâmetros opcionais têm que ser definidos após os parâmetros não opcionais.


/*------------- NAMED ARGUMENTS ----------------
No PHP 8 podemos fazer da seguinte forma para alterar o valor de $c e manter o valor de $b e $c*/

function soma($a, $b = 10, $c = 30)
{
    echo $a + $b + $c;
}

soma(100, 10, 300);

echo '<br>';

soma(c:1000, a:0);

echo '<br>';

soma(500, c:1000);


/*----------- FUNÇÕES ANONIMAS --------------
A partir do PHP 5.3 foram introduzidas as funções anonimas. Uma função anonima não tem nome e pode ser definida como o valor a atribuir a uma variavel.*/

