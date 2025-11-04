<?php


// $rege = '/\d{1}/'  ;

// echo preg_match($rege, 'oi2o3', $m);



// $cpf = '000.000.000.00' ;

// $rege = '/(\d{3})\.(\d{3})\.(\d{3})\.(\d{2})/';

// $novo = preg_replace($rege, '$1-$2-$3-$4', $cpf, -1);

// echo $novo ;



// $email = 'rianmagnus5791@gmail.com' ;

// $rege = '/[A-Za-z]\d*@[A-Za-z]{1,}\.[A-Za-z]{1,}/';

// echo preg_match($rege, $email); 


$str = 'o,i,o,i';

$rege = '/,/';

$resultado = preg_split($rege,$str);

print_r($resultado);