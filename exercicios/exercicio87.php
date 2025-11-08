<?php


class Administrador{
    private $id;
    public $nome;
    private $nivel;
    private $senha;

    function __construct($nome,$senha){
        $this->id = rand(100,200) ;
        $this->nome = $nome ;
        $this->nivel = $this->defineNivel() ; 
        $this->senha = $senha;
        
    }

    function defineNivel(): int{
        $arr = range(100,200);
        $id = array_rand($arr, 1) ;
        return $id ;
    }


    function __get($propriedade){

        return $this->$propriedade;
        
    }



    


    function __toString(): string{

        return "id: $this->nome <br>Nome: $this->nome <br>Senha: $this->senha <br> Nível: $this->nivel ";


        
    }



    
}



$admin = new Administrador('Carlos', 'magnus1990');


// echo $admin ;

$val = $admin->senha ;
echo $val;