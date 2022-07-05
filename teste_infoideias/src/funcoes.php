<?php

namespace SRC;

class Funcoes
{
    /*

    Desenvolva uma função que receba como parâmetro o ano e retorne o século ao qual este ano faz parte. O primeiro século começa no ano 1 e termina no ano 100, o segundo século começa no ano 101 e termina no 200.

	Exemplos para teste:

	Ano 1905 = século 20
	Ano 1700 = século 17

     * */
    public function SeculoAno($ano) {

        $seculo = ceil($ano/100); // divisão por 100 e arrendando para um numero inteiro superior.
        $per = 'D.C.'; //especificação de periodo.
        
        // tomei a liberdade de especificar em caso de numeros negativos que se trata de periodo anterior e mantendo o numero do seculo positivo.
        if ($ano < 0 ) { 
            $seculo = -($seculo);
            $per = 'A.C.'; 
        } 

        return $seculo.' '.$per; 
    }

    
	
	
	
	
	
	
	
	/*

    Desenvolva uma função que receba como parâmetro um número inteiro e retorne o numero primo imediatamente anterior ao número recebido

    Exemplo para teste:

    Numero = 10 resposta = 7
    Número = 29 resposta = 23

     * */
    public function PrimoAnterior($numero) {
        
        //foi criado um laço para verificar quantos divisores cada numero possui, neste laço o contador vai ate não chega ate o numero informado, permitindo assim que sempre mostre o primo anterior a ele.
        for($cont = 1; $cont < $numero; $cont++) {
            $divisores = 0;
            
            // verificando o numero de divisores
            for ($i = $cont; $i >= 1; $i--){
                if (($cont % $i) == 0){
                    $divisores++;
                }
            }
            
            // quando o numero pode ser divido apenas por 1 e ele mesmo a variavel primo recebe esse numero.
            if ($divisores == 2 ) {
                $primo = $cont;
            }
        }
        return $primo; // aqui retornamos apenas o numero primo anterior.
    }










    /*

    Desenvolva uma função que receba como parâmetro um array multidimensional de números inteiros e retorne como resposta o segundo maior número.

    Exemplo para teste:

	Array multidimensional = array (
	array(25,22,18),
	array(10,15,13),
	array(24,5,2),
	array(80,17,15)
	);

	resposta = 25

     * */
    public function SegundoMaior($arr) {
        
        $newarray = array(); // criando um novo array vazio para receber os valores 
        
        //funcao utilizada para criar um array apenas com os valores passados pelo array multidimensional
        foreach($arr as $i => $valor){
            $newarray = array_merge($newarray,array_values($valor) );
        }

        rsort($newarray); // reordenando os valores
        
        return $newarray[1]; //utilizando segunda posição do array e garantindo que sempre sera mostrado o segundo maior numero.
    }
	
	
	
	
	
	
	

    /*
   Desenvolva uma função que receba como parâmetro um array de números inteiros e responda com TRUE or FALSE se é possível obter uma sequencia crescente removendo apenas um elemento do array.

	Exemplos para teste 

	Obs.:-  É Importante  realizar todos os testes abaixo para garantir o funcionamento correto.
         -  Sequencias com apenas um elemento são consideradas crescentes

    [1, 3, 2, 1]  false
    [1, 3, 2]  true
    [1, 2, 1, 2]  false
    [3, 6, 5, 8, 10, 20, 15] false
    [1, 1, 2, 3, 4, 4] false
    [1, 4, 10, 4, 2] false
    [10, 1, 2, 3, 4, 5] true
    [1, 1, 1, 2, 3] false
    [0, -2, 5, 6] true
    [1, 2, 3, 4, 5, 3, 5, 6] false
    [40, 50, 60, 10, 20, 30] false
    [1, 1] true
    [1, 2, 5, 3, 5] true
    [1, 2, 5, 5, 5] false
    [10, 1, 2, 3, 4, 5, 6, 1] false
    [1, 2, 3, 4, 3, 6] true
    [1, 2, 3, 4, 99, 5, 6] true
    [123, -17, -5, 1, 2, 3, 12, 43, 45] true
    [3, 5, 67, 98, 3] true

     * */
    
	public function SequenciaCrescente($arr) {

        $newarray = $arr; //utilizando uma nova variavel para que caso aja alteração, a mesma não altere os dados informados
        $count = count($newarray); // função utilizada para estabelcer quantidade de laço.
        $num = 0; // numero utilizado como parametro de comparação
        $deletes = 0; // numero utilizado para verificar quantidade de modificações

        //este é o laço que verificara a quantidade de alterações para que o array obtenha uma sequencia crescente
        for ($i = 0; $i < $count; $i++){
            if ($num < $newarray[$i]){
                $num = $newarray[$i];
            } elseif ($num > $newarray[$i] ){
                unset($newarray[$i]);
                $deletes++;
            }
        }
        //essa condicional irá informar o restultado da verificação.
        if ($deletes > 1){
            $res = 'FALSE';
        } else {
            $res = 'TRUE';
        }
        return $res;
    }
}

