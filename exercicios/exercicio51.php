<?php


function organiza($arr){

    return implode(', ', $arr) ;
}




$lista = ['Pão' , 'Massa' , 'Molho de tomate' , 'Abacaxi' , 'Cachaça'] ;

echo organiza($lista) ;


