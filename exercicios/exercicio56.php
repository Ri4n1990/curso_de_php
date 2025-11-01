<?php

use Pcntl\QosClass;

$frase = 'o rato roeu a roupa do rei de roma' ;

$tam = mb_strlen($frase) - 1 ;

$qtda =  0;
for($qtd = 0 ; $qtd <= $tam ; $qtd++){

    if(mb_substr($frase , $qtd , 1) == 'a'){
        $qtda++ ;
    }




}

echo $qtda ;


