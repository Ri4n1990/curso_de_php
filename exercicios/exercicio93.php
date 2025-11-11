<?php


class Roda{
    public $aro;
    public $calibragem;




    function __construct($aro,$calibragem){

        $this->aro = $aro;
        $this->calibragem = $calibragem ;
        
    }



    public function teste(): void{

        echo "Roda rodando...";

    }


    function __toString(): string{

        return "Aro: $this->aro <br>Calibragem: $this->calibragem";
        
    }



}




class Carro{

    public $marca;
    public $cor;
    public $ano;
    public $roda;


    function __construct($marca,$cor,$ano,$roda){

        $this->marca = $marca;
        $this->cor = $cor;
        $this->ano = $ano;
        $this->roda = $roda;





        

    }

}



$pneuzin = new Roda(40,20);

$up = new Carro("nissan", "Preto", 2022,$pneuzin );

echo $up->roda ;