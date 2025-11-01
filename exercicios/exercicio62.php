<?php


$frase = 'Oi eu sou o principe perdido' ;


function ajeita($palavra){
    $arr = explode(' ', $palavra); 
    $palavra = implode(' ', $arr);

    
    return $palavra ;

}

$frase_certa = str_replace('perdido', 'achado', $frase);



echo ajeita('rian      de      sousa');
