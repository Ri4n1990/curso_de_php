<?php


$str1 =  " Rian " ;

echo "Esta é a string 1:$str1<br>" ;

$str1limpa = trim($str1) ;

echo "Esta é a string 1:$str1limpa<br>" ;

$str1limpa2 = ltrim($str1) ;

$str1limpa3 = rtrim($str1) ;

echo $str1limpa2 . $str1limpa3;