<?php


$arr = [] ;


for($cont = 1 ; $cont <= 20 ; $cont++){

    array_push($arr , $cont) ;


}

$len = count($arr) - 1 ;


for($len ; $len >=0 ; $len--){

    $calc = $arr[$len] % 2 ;

    if($calc == 0){
        continue;
    }

    echo $arr[$len] . "<br>";

}


