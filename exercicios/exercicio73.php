<?php


function somaElementos($arr){

    $retorno = count($arr) <1 ? "O array está vázio" : array_sum($arr) ;

    return $retorno ;
}



echo somaElementos([5,5,5]) ;