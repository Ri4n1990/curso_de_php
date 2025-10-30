<?php




$arr = [] ;


for($i = 1 ; $i <=10 ; $i++ ){

    array_push($arr , $i) ;

}

foreach($arr as $valor){
    echo   $valor . ",";

}