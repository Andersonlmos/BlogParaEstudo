<?php
/*CICLO WHILE ---------------------
Existem 4 estruturas de ciclos em PHP, Elas existem para garantir executar um determinado bloco de código várias vezes.
Definimos a condição durante a qual ciclo deve continuar a ser executado, quando essa condição for falsa, o ciclo termina e o código avança. */

$x = 1;
while ($x < 10) {
    echo 'Ciclo em execução <br>';
    $x++;
}
echo '<hr>';

//Outro exemplo

$i = 0;
while ($i < 10) {
    echo $i++ . '<br>';
}
echo '<hr>';
//Nesse caso podemos remover as chaves {}.
$j= 0;
while ($i < 10)echo $i++ . '<br>';



/*CICLO DO WHILE ------------------
É muito semelhante ao ciclo while, contudo , neste caso a condição é avaliada após a execução do ciclo.*/ 
$a = 0;
do{
    echo $a++ . '<br>';
}
while ($a < 10);
echo '<hr>';

/*Quando só temos uma expressão a executada, podemos ignorar as chaves {}*/

$b = 0;
do
echo $b++ . '<br>';
while ($b < 10);
echo '<hr>';

// ou

$c = 0;
do echo $c++ . '<br>'; while($c < 10);



/*CICLO FOR ----------------
Permite executar um bloco de código determinado números de vezes e é constítuido por três parâmentros.
1- O iniciador  - indica o valor inicial do contador.
2- A condição - indica qual a condição para o ciclo termine.
3- O incremento -  altera o valor do contador em cada ciclo.*/ 

for ($q = 1; $q < 10; $q++){
    echo $q . '<br>';
}
echo '<hr>';

/*Se for executada apenas uma expressão não e nessecario usar as chaves {}. */

for($f = 1; $f < 15; $f++)
echo $f . '<br>';
echo '<hr>';

/*O primeiro e último parâmetro também podem ser divididos em vário parâmetros usando virgula com separtador.*/ 
for ($contador = 0, $h = 10; $contador < 10; $contador++, $h--){
    echo $h . '<br>';
}
echo '<hr>';



/*CICLO FOREACH -----------------------
É um ciclo especialmente concebido para fazer iteração pelos valores de um array*/ 

$nomes = ['João', 'Ana', 'Carlos'];
foreach($nomes as $nome){
    echo $nome . '<br>';
}
echo '<hr>';


$capitais = [
    'Portugal' => 'Lisboa',
    'Brasil' => 'São Paulo',
    'Alemanha' => 'Berlim'
];
foreach ($capitais as $key => $value){
    echo "Para o pais $key a capital é $value<br>";
}
echo '<hr>';



/* Break --------------
Serve para interromper a execução de um loop.*/ 

for ($arr = 0; $arr < 20; $arr++){
    echo $arr . '<br>';
    if($arr == 10){
        break;
    }
}


echo '<hr>';
$pessoas = ['Paulo', 'Beatriz', 'Ester', 'Pedro', 'Jose'];
foreach ($pessoas as $pessoa){
    echo $pessoa . '<br>';
    if($pessoa == 'Ester') {
        break;
    }
}
echo '<hr>';

/* CONTINUE -------------------
Permite avançar uma volta do ciclo ignorando o código que deveria ser executado*/ 


for($i = 0; $i < 20; $i++){
    if($i == 10){
        continue;
    }
}
echo $i;
echo '<br>';

$array = ['Zero', 'Um', 'Dois', 'Três', 'Quatro', 'Cinco'];
foreach ($array as $key => $value){
    if (!($key % 2)){
        continue;
    }
}
echo $value . "\n";