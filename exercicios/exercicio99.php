<?php 


$vencimento_fatura = strtotime("+3days");

$data_vencimento = date('d/m/Y',$vencimento_fatura) ;

echo $data_vencimento . "<br>" ;


$umano = strtotime("+1year") ;

$dataafter = date('d/m/y', $umano) ;

echo "Data atual:". date('d/m/y') . "<br>" ;

echo "Um ano depois $dataafter" ;