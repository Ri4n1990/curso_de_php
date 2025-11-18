<?php 


$boleto = new DateTime();

echo "Data da guia" . $boleto->format('d/m/Y') . "<br>" ;

$vencimento = $boleto->modify('+5days');

$aniversario = new DateTime();




echo "Data de vencimento" . $vencimento->format('d/m/Y') . "<br>";


$aniversario->setDate(2004,1,3);

echo "Meu aniversário " . $aniversario->format('d/m/Y');