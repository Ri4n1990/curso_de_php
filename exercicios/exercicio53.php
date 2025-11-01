<?php


function isPrime($num){

    if($num < 2 ){
        return false ;

    }

    $raiz = sqrt($num) ;
    

    for($ite = 2 ; $ite <= $raiz ; $ite++){

        if($num % $ite == 0){
            return false;
            
        }

    }

    return true ;

}



$tipo =  isPrime(5) ;
$echo ; var_dump($tipo) ;

