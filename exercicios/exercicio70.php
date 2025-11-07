<?php

$nome = 'abutre';
$corpelo = 'Azul' ;
$patas = 2 ;


$animal = compact('nome', 'corpelo', 'patas') ;


foreach($animal as $valor){

    echo "$valor <br>" ;

}