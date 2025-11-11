<?php


$pessoa = new class(){
    public $nome = "Matheus";

    function dizerNome(){
        echo "Meu nome é $this->nome";
    }

};


$pessoa->dizerNome();