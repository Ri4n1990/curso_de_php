<?php



function reverso($palavra){

    if(! is_string($palavra)){
        return "Palavra inválida!" ;

    }

    $tam = strlen($palavra) -1 ;
    
    $revertida = "";

    for($tam ; $tam >= 0 ; $tam--){
        $revertida .= $palavra[$tam] ;

    }

    return $revertida ;
    

    
    

}


echo reverso('Calha');




