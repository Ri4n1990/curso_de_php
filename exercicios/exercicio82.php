<?php

class Pessoa{

    public $nome = 'João' ;
    public $idade = 22 ;


    function andar(){
        echo "To na passada aqui <br>";
    }

}




$betao = new Pessoa ;

$betao->andar() ;
$betao->nome = 'Betão' ;

echo "Nome: $betao->nome <br>idade: $betao->idade  ";


