<?php
/*----------- RETURN -----------
A declaração return provoca o fim da execução do código de uma função, retornando ao local omnde a função foi chamada.*/

function falar(){
    return;
    echo 'Não vai ser apresentado este texto';
}

/*Opcionalmente podemos usar o return para devolver um valor. Desta forma, uma função pode ser responsável por exemplo desenvolver um conjunto de cálculos e devolver o resultado.*/ 

function adicionar($a, $b){
    $resultado = $a + $b;
    return $resultado;
    // ou
    return $a + $b;
}
echo adicionar(10, 20);
echo '<br>';


//Outro exemplo

$nome = 'João';
if(avaliar_nome($nome)){
    echo 'O cliente está correto.';
}

function avaliar_nome($n){
    if($n == 'João'){
        return true;
    } else {
        return false;
    }
}
