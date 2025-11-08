<?php


class Cachorro{
    public const dentes = 'Brancos' ;
    public $nome;
    public $raca;
    public $cor;


    function __construct($nome,$raca,$cor){

        $this->nome = $nome ;
        $this->raca = $raca ;
        $this->cor = $cor ;

    }


    function __toString(): string{

        return "Nome: $this->nome <br>Raça: $this->raca <br>Cor: $this->cor" ;
        
    }
    

}


$toto = new Cachorro('Totozin', 'Vira lata' , 'Caramelo') ;

echo $toto;