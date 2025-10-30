<?php



$lista = [1,2,'oi',2.13,true, 'eae', 'tudo bom?', 2.10,9,false] ;

$indice = 0 ;

while($indice < count($lista)){

    if(is_string($lista[$indice])){
        echo $lista[$indice] . "<br>" ;
    }

    $indice++ ;





}