<?php


class Pessoa{
    function falar(){
        echo 'olá pessoal';
    }
}



$eu = new Pessoa();

$eu->nome = 'Rian';

echo $eu->nome, "<br>" ;

$eu->falar();
