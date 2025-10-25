<?php


$teste = 'asd' ;

if(true){
    $teste = 'dsa';
    echo $teste , "<br>";
}


echo $teste, "<br>" ;

function funcao(){
    global $teste ;
    echo $teste, "local"; 
    
}

funcao();