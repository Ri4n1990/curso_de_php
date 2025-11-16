<?php 


$dataA = new Datetime() ;

$dataB = new DateTime() ;



$dataB->setDate(2001,10,15) ;

echo $dataA->format('d/m/Y') . "<br>"; 

echo $dataB->format('d/m/Y'); 

$diferenca = $dataA->diff($dataB) ;

print_r($diferenca) ;

echo $diferenca->format('%a d');