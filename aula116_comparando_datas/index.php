<?php 


$data = new DateTime() ;

$datab = new DateTime() ;

$datab->setDate(2022,10,10) ;

if($datab < $data){
    echo 'Data b é menor que data a ' ;
    
}