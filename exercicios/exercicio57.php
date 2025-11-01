<?php



$frase = 'Este item está em promoção';

$nova_frase = '';

$tam = mb_strlen($frase) -1 ;

for($ind = 0 ; $ind <= $tam ; $ind++){
    
    if($ind >=18){

        $letra = mb_strtoupper(mb_substr($frase, $ind , 1)) ;

        $nova_frase .= $letra;

        continue ;

    }

    $nova_frase.= mb_substr($frase , $ind , 1) ;

}

echo $nova_frase ;


