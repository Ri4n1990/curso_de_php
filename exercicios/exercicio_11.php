<?php


$idade = 10;

$idade2 =& $idade ;

echo 'Antes da mudança ,<br>' ;

echo "idade : $idade  idade2 : $idade2 <br>" ;

echo 'depois da mudança <br> ' ;

$idade2 = 200;

echo "idade : $idade  idade2 : $idade2 <br>" ;


$idade = 5;

echo "idade : $idade  idade2 : $idade2";