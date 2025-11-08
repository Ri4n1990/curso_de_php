<?php

class Animal{
    public $nome;
    public $raca; 


    function __construct($nome, $raca){
        $this->nome = $nome ;
        $this->raca = $raca ;

        
    }


    function __toString(): string{

        return "Nome: $this->nome<br>Raça: $this->raca <br>";
        
    }

    public function som(): void{

        echo "Som do animal $this->raca <br>";

    }
}



class Pato extends Animal{
    public $cor ;

    function __construct($nome,$raca,$cor){

        parent::__construct($nome,$raca);
        $this->cor = $cor ;
        
    }


    function __toString(): string{

        return "Nome: $this->nome <br>Raça: $this->raca <br>Cor: $this->cor";
        
    }
}



$javali = new Animal('Bob', 'Javali');

$javali->som();

echo $javali ;

$patin = new Pato('donald', 'Pato', 'Branco') ;

$patin->som() ;

echo $patin;