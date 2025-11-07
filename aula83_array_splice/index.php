<?php


$arr = range(1,10) ;

print_r($arr);
$retorno = array_splice($arr,1,2) ;
echo "<br>";
print_r($arr);
echo "<br>";
print_r($retorno) ;

