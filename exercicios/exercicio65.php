<?php


$multi = [[ 1,2,3,4] , [5,6,7,8] , [9,10,11,12]];
$msg = ['Primeiro', 'Segundo', 'Terceiro'];


foreach($multi as $indi =>  $array){
    echo "Imprimindo valores do" . $msg[$indi] . " array <br>";
    foreach($array as $valor){
        echo $valor . "<br>";
    }
}