<?php 

$frente = strtotime("+5years") ;

$data = date('d/m/y',$frente) ;

$nova_data =  mktime(12,00,00,1,3,2004);

echo $data . "<br>" ;

echo date('d/m/Y', $nova_data );