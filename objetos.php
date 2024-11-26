<?php
/* Uma classe é um modelo/forma/molde a partir do qual criamos objetos,exemplo: a classe Humano é um modelo que a partir dele criamos um conjunto de homens e mulheres, cada um partilhando o mesmo modelo com propriedades e funções diferentes.
Homem eMulher tem ambos cabelo, as o homem pode ter o cabelo escuro e a mulher cabelo claro.
As classes são definidos pela a declaração class, o seu nome e o bloco de código que contém as suas propriedades e métodos.
Por convensão PSR-1 o nome da classe deve ser sempre atribuido na forma StudlyCaps/PascalCase/MixedCase.*/ 

class Humanos
{
    //Propriedades e Métodos
}

class JogadorFutebol
{
    //Propriedades e Métodos
}

/* O corpo de uma class contém PROPRIEDADES e MÉTODOS.
-PROPRIEDADES: 
São variaveis que guardam as caracteristicas do objeto.

-MÉTODOS:
São funções que definem o que o objeto pode fazer.

As propriedades são também conhecidas como field (campos) ou atribudos de uma classe.*/ 

class FiguraGeometrica
{
    public $largura, $altura;
    public $x;
    public $y;
    function novaArea($a, $b) {
        return $a * $b;
    }
}


/*----------CRIAÇÃO DE OBJETOS, INSTANCIAÇÃO -------------------
Para acessar as propriedades de uma classe, dentro dos métodos da classe, é usada a pseudo variavel $this seguida do operador seta ->.*/

class Humano
{
    public $nome = 'Anderson';
    public $sobrenome = 'Lemos';
    public function nomeCompleto(){
        return $this->nome . ' ' . $this->sobrenome;
    }
}

/*As classes recorrem a utilização de Acess Modifiers - Niveis de acesso.
Os niveis de acesso aos dados indicam se podemos ver os dados apenas dentro da classe se podemos ver fora da classe ou se estao protegidos por algum motivo.*/
//------ INSTANCIAR UMM OBJETO -----------

$homem = new Humano();
echo $homem->nomeCompleto();

/*Tal como acontece com as funções, os objetos podem ser instanciados mesmo se a definição da classe aparece ais a baixo no cript*/ 