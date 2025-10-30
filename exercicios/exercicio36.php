<?php


$arr = [2,4,5,7,8,10,20,12,13,15] ;

$indice = count($arr) - 1; 

for($indice ; $indice >=0 ; $indice--){

    $calc = $arr[$indice] % 2  ;

    if($calc == 0){
        echo $arr[$indice] . "<br>" ;
    }

}



