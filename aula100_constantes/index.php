<?php


class Humano {
    public const olhos = 2 ;
    public const bracos = 2 ;

    function mostraconst(){

        echo self::olhos . "<br>";
    }
}


$human  = new Humano;

echo $human::olhos;