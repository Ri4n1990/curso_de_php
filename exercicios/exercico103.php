<?php 

class Animal{
    public $nome;
    public $patas;

    function __construct($nome,$patas){
        $this->nome = $nome;
        $this->patas = $patas;

    }

    public function som(): void{
        echo 'Barulho';
    }

}


class Pato extends Animal{
    public $raca;
    public $cor;

    function __construct($nome,$patas,$raca,$cor){
        parent::__construct($nome,$patas);
        $this->raca = $raca;
        $this->cor = $cor;
        
    }

    function __toString(): string{
        return "Nome: $this->nome ";
    }
}







$patin =  new Pato('quaqua',2,'patin pretin', 'pretin' );

echo $patin;