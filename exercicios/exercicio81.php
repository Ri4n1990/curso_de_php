<?php

class Cachorro{

    function latir(){
        echo "Au Au <br>";
    }

    function andar(){
        echo "To na passada aqui <br>";
    }
}



$toto = new Cachorro ;

$toto->latir();
$toto->andar() ;