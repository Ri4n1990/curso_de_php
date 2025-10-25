<?php

$nome = 'joaquim' ;
$idade = 24 ;


function func(){
    global $nome , $idade ;
    echo "Nome : $nome Idade : $idade" ;
}

function altera(){
    global $nome ,$idade;
    $nome = 'Clebão' ;
    $idade = 35 ;
}

altera();

func();