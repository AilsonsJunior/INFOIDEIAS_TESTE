<?php

require_once 'funcoes.php';

use SRC\Funcoes;

echo'<h1>Pagina de testes</h1>';

$ano = new Funcoes;

echo $ano->SeculoAno(-1700);

echo '<hr>';

echo $ano->PrimoAnterior(10);

echo '<hr>';



echo $ano->SegundoMaior( array (
	array (25,22,18),
	array (10,15,13),
	array (24,5,2),
	array (80,17,15)
    ))
;

echo '<hr>';

print_r( $ano->SequenciaCrescente(array (1,2,8,3,9,4,5,6,7)) );

echo '<hr>';


?>