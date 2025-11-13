<?php 


$cincodias = strtotime("+5 months");

$dataatualmais = date('d/m/y',$cincodias) ;

echo $dataatualmais;