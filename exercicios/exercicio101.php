<?php 



$add = strtotime('+2days') ;
$anonovo = mktime(00,00,00,1,1,2026) ;

$data = date("d/m/Y", $anonovo);

// echo $data ;

$dates = new DateTime() ;

// $dates->modify('+3months');

$dates->setDate(2004,1,3);

$dates->setTime(20,30,30) ;

echo $dates->format('d/m/Y/') ;