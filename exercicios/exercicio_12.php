<?php


$var = 'mais teste <br>' ;

function minha_func(){
    $var = 'teste';
    return $var ;
}

echo $var ;

$teste = minha_func() ;
echo $teste ;

