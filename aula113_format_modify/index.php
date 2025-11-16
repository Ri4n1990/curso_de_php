<?php 

$data = new DateTime() ;


echo $data->format('d/m/Y') . "<br>" ;

echo "<br>" ;


$data->modify('+5 years');

echo $data->format('d/m/Y') . "<br>" ;

