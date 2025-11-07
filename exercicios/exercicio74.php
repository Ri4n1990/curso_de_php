<?php


function maiorElemento($arr){

    
    $retorno =  count($arr) <1 ? "O array está vázio" : max($arr) ;

    return $retorno ;
    



}



echo maiorElemento([1,5,10]);
