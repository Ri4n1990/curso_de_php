<?php

abstract class Teste{
    public  static function testandoclasse(){
        echo "ESte método é de uma classe abstrata <br>";
    }


    abstract public function testeabs();


}

class Nova extends Teste{

    public function testeabs(){
        echo "Teste método abstrato <br>";
    }
}

