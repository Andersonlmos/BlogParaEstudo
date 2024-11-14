<?php
# ====== ARRAYS NUMERICOS
    /* Um array é uma coleção de valores, funciona como uma variavel, mas que pode conter muitos valores "arrumados" cada um o seu espaço. Esse espaço é designado por índice do array.
    Um array é uma coleção constituída por chaves/índices e valores.
    as chaves/índices podem ser númericos (array númerico) ou strings (array associativo) e podem até coexistir os dois tipos de índices no arrays.
    Os valores podem ser de qualquer tipo, inclusive serem outros arrays.*/ 

    $valores = [1,2,3,4,5,6];
    $nomes = ['joao', 'ana', 'carlos'];

    /* Estes arrays são de índice númericos, Para apresentar um dos seus valores, procedemos da seguinte forma:*/ 
    //echo $valores[0];
    //echo $nomes[1];

    # Os arrays tem índice de base 0.
    # não têm obrigatoriamente de ter chaves sequenciais.
    $dados = [
        10 => 1000,
        20 => 2000,
        30 => 3000
    ];

    # se adicionamos um novo elemento no final da coleção, ele vai assumir o último índice +1.
    $dados[] = 4000; # $dados [31];

    /* Sempre que queremos apresentar um valor de um array, usamos o seu índice. Da mesma forma, podemos alterar o valor do array usando o seu índice.*/ 

    $valores1 = [10,20,30];
    $valores1[1] = 2000; # $valores1 = [10,2000,30];

    //Podemos também ignorar o índice para adicionar um novo elemento ao array.
    $valores1[] = 30; #v$valores1 = [10,2000,30,3000];

    //Outra forma
    array_push($valores1, 5000); $valores1 = [10,2000,30,3000,5000];

    # Para apresentar valores de um array numa string, podemos fazer da seguinte forma:

    //echo 'Os valores são: ' . $valores[0] . ' e ' . $valores[1];
    #ou 
    //echo "os valores são: $valores[0] e $valores[1]";

# ====== ARRAYS ASSOCIATIVOS
 // Ao contrario dos arrays numéricos, as chaves são do tipo string
 $dados = [
    'A' => 20,
    'B' => 30,
    'C' => 40,
    'D' => 50
 ];

 # ou

 $dados1 = [
    'nome' => 'joao',
    'email' => 'joao@email.com',
    'telefone' => '9999999990'
 ];

 /* Da mesma forma que nos arrays númericos não devem existir duas chaves iguais, nos associativos também não.
 Na apresentação não é gerado nenhum erro. o valor a ser definido é sempre o último.*/ 
 $dados2 = [
    'nome' => 'joao',
    'nome' => 'carlos'
 ];
# ====== ARRAYS MISTOS 
 /* É possivel criar um array que combina índices numéricos e strings.
 Embora não seja de uso frequente, é possivel da seguinte forma:*/ 
 $dados3 = [
 0 => 10,
 'nome' => 'Antonio',
 10 => 1000,
 11 => 'Fortaleza'
 ];

 /* Uma estrutura desse tipo é mais complexa de gerir, devido a mistura de indices e tipos de dados */
 //echo $dados3[0]; # 10
 //echo $dados[3]; # Fortaleza

# ==== ARRAYS MULTIDIMENSIONAIS
/* São arrays, numericos ou associativos, cujos valores são outros arrays.
Exemplo: */
$dados4 = [
   [10, 20, 30, 40],
   [100, 200, 300, 400],
   [1000, 2000, 3000, 4000],
];
// Neste caso, para apresentar valores deste array:

//echo $dados4[1][2]; #300
//echo $dados4[2][0]; #1000

// Podemos ter arrays multidimensionais associativos:
$cidades = [
   'Portugal' => ['Lisboa', 'Porto', 'Coimbra'],
   'Barsil' => ['São Paulo', 'Brazilia', 'Rio de Janeiro'],
];

// Os arrays podem ter mais do que duas dimensões, portanto é mais complexo de se trabalhar com ele.