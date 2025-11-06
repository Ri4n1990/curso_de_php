<?php


$lista = range(10,100,10) ;

$quebra = array_chunk($lista , 5) ;

print_r($lista) ;
echo "<br>" ;

foreach($quebra as $array){
    echo implode(" , ",$array) . "<br>";
}
