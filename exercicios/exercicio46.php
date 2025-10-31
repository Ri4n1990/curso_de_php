<?php

$numeros = [1,2,3,4,5,6,7,8,9,10,11,12] ;


function criar($arr){

    $novo = [] ;
    foreach($arr as $valor){

        if($valor> 7){
            array_push($novo , $valor) ;

        }
    }

    return $novo ;

}


$lista = criar($numeros) ;

echo implode(' , ' , $lista ) ;





