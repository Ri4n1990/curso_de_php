<?php

class Humano{
    public $nome;
    public $idade;
    public $genero;


    function __construct($nome,$idade,$genero){

        $this->nome = $nome;
        $this->idade = $idade;
        $this->genero = $genero;

    }


    public function falar(): void{

        echo "Oi meu nome é $this->nome, eu tenho $this->idade anos. <br>";
            

    }





}




class Medico extends Humano{
    public $crm;
    public $especialidade ;


    function __construct($crm,$especialidade,$nome,$idade,$genero){

        parent::__construct($nome,$idade,$genero);

        $this->crm = $crm;
        $this->especialidade = $especialidade;
        
    }
}





$rian = new Humano('Rian', 21, "Masculino");

$rian->falar();


$sofia = new Medico(122441,'Dermatologista', "Sofia", 21, "Feminino") ;

$sofia->falar();