<?php 


$data = new DateTime() ;

print_r($data) ;
echo '<br>' ;



$data->setDate(1999,1,3);
$data->setTime(12,30,00);
echo $data->format('d/m/Y');

