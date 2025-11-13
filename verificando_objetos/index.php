<?php


class Human{

    public function falar(){
        echo "Olá" ;
    }
}






$matheus = new Human;

echo get_class($matheus). "<br>";

if(is_object($matheus)){

    echo "é um objeto <br>";
}


if(method_exists($matheus,"falar")){
    echo "Método existe";

}




