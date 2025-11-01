<?php


$str = 'Está string é bem grande' ;


for($i = 0 ; $i < strlen($str) -1 ; $i++){

    echo mb_substr($str , $i , 1) . "<br>" ;


}
