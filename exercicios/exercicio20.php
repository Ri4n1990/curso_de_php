<?php


$num1 = 20 ;
$num2 = 14 ;

$result1 = $num1 > $num2  ? 'o um venceu' : 'o dois venceu' ;
$result2 = get_debug_type($num1) == get_debug_type($num2) ? 'é o mesmo tipo' : 'não é o mesmo tipo' ;

echo $result1 . "<br>" . $result2;