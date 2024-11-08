<?php
/*
---- Arrays Multidimensionais ----
$alunos = array(
    array('nome' => 'João', 'idade' => 25, 'notas' => array(8,9,7)),
    array('nome' => 'Maria', 'idade' => 19, 'notas' => array(8,7,8)),
    array('nome' => 'Vanessa', 'idade' => 22, 'notas' => array(7,9,6))
);
echo $alunos[0]['nome'];
echo $alunos[1]['notas'];

---- Objetos ----
class Pessoa {
    public $nome;
    public $idade;
    function __construct($nome, $idade)
    {
        $this->nome = $nome;
        $this->idade = $idade;
    }
}
$pessoa = new Pessoa('João', 25);
echo $pessoa->nome;
echo $pessoa->idade; 

--- Variaveis Dinâmicas ----
$nome = 'João';
$$nome = 'Desenvolvedor';
echo $João;


//Funções em PHP
/*
$num1 = 10;
$num2 = 15;

$num3 = soma($num1, $num2);
imprimir_resultado($num3);

function soma($numero1, $numero2) {
    return $numero1 + $numero2;
}
function imprimir_resultado ($numero){
    echo "O resultado da operação é igual a: " . $numero;
}

- Palavra reservada "function" seguida do nome da função.
- Nome da função seguido de parênteses - "()". Caso receba paâmentros, eles deverão ser declarados dentro dos parênteses. Do contrário, deverão ficar sem conteúdo.
- Instruções da funcão envoltas em chaves - "{}".
* As funções em PHP podem ou não retornar resultados. A primeira delas,"soma" por meio do operador "return", devolve o resultado da soma entre os dois parâmetros recebidos.
*/