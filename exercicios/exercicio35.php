<?php



$arr = [10,20,30,40,50,60,70,80,90,100] ;

$indice = count($arr)-1 ;

while($indice>=0){

    if($arr[$indice] == 30 ||  $arr[$indice] == 40 ){

        $indice-- ;
        echo 'PULOU <br>';
        continue ;

    }

    echo "Indice : " . $arr[$indice] . "<br>" ; 
    $indice-- ;




}

