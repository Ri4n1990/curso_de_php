<?php


function encontrarPares($arr){


    if (count($arr) <1){
        return "O array está vázio" ;

    }

    $pares = [] ;

    
    foreach($arr as $valor){
        if($valor % 2 == 0){

            $pares[] = $valor ;


        }

    }

    return $pares ;

}



$arr = [2,4,6,1,3] ;

$par = encontrarPares($arr) ;

print_r($par) ;