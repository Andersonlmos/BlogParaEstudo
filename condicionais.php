<?php
## DECLARAÇÕES/INTRUÇÕES CONDICIONAIS IF - ELSEIF - ELSE 
    /*São instruções utilizadas para controlar o fluxo da aplicação de acordo com determinadas condeções.
    Para verificação das condições destas declarações, recorremos ao uso de operadores de comparação combinados com os operadors lógicos.

    Declaração IF - Define blocos de códigos que só são executados se a condição for verdadeira (True).*/

    $nome = 'joao';
    if($nome == 'joao'){
        echo 'Foi identificado o nome do autor do video.';
    }

    // IF ... ELSE

    $idade = 18;
    if($idade <= 18){
        echo 'Adolescente';
    }
    else {
        echo 'Adulto';
    }

    // IF ... ELSEIF ... ELSE

    $nota = 5;
    if($nota <= 2){
        echo 'Nota fraca';
    }
    elseif($nota <= 4){
        echo 'Nota insuficiente';
    }
    elseif($nota <=6){
        echo 'Nota positiva';
    }
    elseif($nota <= 8){
        echo 'Nota excelente!';
    }

    // Podemos deioxar de usar as chaves, se existir uma instruçao no bloco.
    if($nota <= 2)
        echo 'Nota fraca';
    elseif($nota <=4)
        echo 'Nota insuficiente';
    elseif($nota <=6)
        echo 'Nota positiva';
    elseif ($nota <= 8)
        echo 'Nota muito positiva';

    // OU

    if($nota <= 2){
        echo 'Nota fraca';
        echo 'Reportar ao professor';
    }
    elseif($nota <= 4)
        echo 'Nota insuficiente';
    elseif($nota <= 6)
        echo 'Nota positiva';
    elseif($nota <= 8)
        echo 'Nota muito positiva';
    else
        echo 'Nota excelente!';

## SWITCH
// É uma alternativa do IF 
$nome = 'joao';
switch ($nome){
    case 'joao':
        echo '1';
        break;
    case 'ana':
        break;
    case 'joao':
        echo 'joao';
        break;
    default:
        echo 'outra coisa qualquer';
        break;
}

// Sintaxe alternativa

#Normal
$valor = 5;
if($valor == 10){
    // codigo 1
} else {
    // codigo 2
}

#Alternativa
if ($valor == 10):
    // codigo 1
else:
    // codigo 2
endif;

// Switch
switch ($variable):
    case 'value':
        // codigo
        break;
    default:
        // codigo
        break;
endswitch;

// Sintaxe alternativa no HTML
/*
<?php if(true): ?>
    <div> Executar este codigo HTML </div>
<?php else: ?>
    <h3>Ececutar aqui</h3>
<?php endif; ?>
*/

