<?php


class Carro{
    public $nome = 'Lancer';
    public $marca = 'Mitsubishi' ;
    protected $potencia = 2.0;
    public $vel_maxima = 300 ;


    public function getVelmaxima(): int{

        return $this->vel_maxima ;

    }

    public function setVelmaxima($velocidade): void{
        $this->vel_maxima = $velocidade ;


    }

}


$lancer = new Carro ;

echo $lancer->vel_maxima . "<br>";

$lancer->setVelmaxima(400) ;
$velocidade = $lancer->getVelmaxima();
echo "Velocidade: $velocidade" ;
