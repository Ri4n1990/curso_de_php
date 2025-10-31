<?php


$var_global = 7 ;


function soma(){

    global $var_global ;

    return $var_global +1 ;
}


function gera_id(){
    static $id  = 0 ;

    $id++ ;

    return $id ;
}




echo gera_id() . "<br>"; 
echo gera_id() . "<br>"; 
echo gera_id() . "<br>"; 


echo soma() ;