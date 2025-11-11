<?php

interface Caracteristicas {

    

    public function falar();

}




class Zumano implements Caracteristicas{

    public $idade  = 29;


    public function falar(): void{

        echo "Olá mundo!"; 
        
    } 



}

$lolo = new Zumano;