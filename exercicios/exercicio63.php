<?php




$arr = range(10,45) ;

foreach($arr as $valor){
    $soma = $valor + 6;
    $msg = $soma >= 30 ? "<br>o número $soma é muito alto " : $soma . "<br>" ;

    echo $msg ;
}