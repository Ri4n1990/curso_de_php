<?php


function sumDigits($num){
    $soma = null ;
    $digitos = (string) $num ;
    $tamanho = mb_strlen($digitos)-1 ;

    if($tamanho ==1){
        return $num ;
    }

    for($ind = 0 ; $ind <= $tamanho ; $ind++){
        $numero = (int) $digitos[$ind] ;

        $soma+=$numero;



    }

    return $soma ;

    
}



var_dump(sumDigits(102))  ;




