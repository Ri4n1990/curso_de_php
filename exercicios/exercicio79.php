<?php

function ordenar($arr){

    if(count($arr) <1){
        return "Array vázio engraçadão"; 
    }

    $ordenado = []; 
    $maior = null ;
    $indice_maior = null ;

    while(count($arr) >= 1){

        foreach($arr as $indice => $valor){

            if($valor > $maior){
                $maior = $valor ;
                $indice_maior = $indice ;
                
                
            }
        }

        
        unset($arr[$indice_maior]);
        array_unshift($ordenado , $maior) ;
        $maior = null ;
        
    


    }

    return $ordenado ;


}


$arr = [5,4,3,2,1] ;



print_r(ordenar($arr)) ;