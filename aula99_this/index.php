<?php


class Animal{

    public $nome;
    

    function escolherNome($nome){

        $this->nome = $nome ;
        $this->latir();
        



    }


    function latir(){
        echo "auau <br>" ;
    }
}



$toto = new Animal; 

$toto->escolherNome('Toto') ;

echo $toto->nome; 