<?php
/* Um gerador é uma função que permite gerar series de valores, cada valor é devolvido pela função atraves da instrução yield.
Ao contrario do return, a instrução yeild guarda o estado da função permitindo que a função continue a partir do estado onde ficou na última chamada.*/ 

function buscar_numero(){
    for ($i = 0; $i < 10; $i++){
        yield $i;
    }
}
/*A função geradora funciona como um interador, podendo ser usada num ciclo até que o gerador não tenha mais valores para devolver com o yield*/ 
foreach (buscar_numero() as $numero){
    echo "$numero<br>";
}
echo '<hr>';

/* Na versão 7 do PHP com a introdução do yield from, que permitem outro tipo de retorno:
devolver valores de outro gerador;
devolver valores de um array.*/ 

function BuscarNomes(){
    yield 'joão';
    yield 'ana';
    yield 'pedro';
    yield from ['carlos', 'maria', 'jose'];
    yield 'ricardo';
}
foreach(BuscarNomes() as $nome){
    echo "$nome<br>";
}

/*Como as funções geradoras ão necessitam de tratar todos os dados de uma vez, quando usadas, podem aumentar substancialmente a perfomance do script*/ 
