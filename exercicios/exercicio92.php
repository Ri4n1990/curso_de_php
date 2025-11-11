<?php




trait roda{
    public $aro;
    public $calibragem;

    public function teste(): void{

        echo "Roda rodando...";

    }
}





class Carro{

    use roda; 

    public $marca;
    public $cor;
    public $modelo;


    function __construct($aro,$calibragem,$marca,$cor,$modelo){

        $this->aro = $aro;
        $this->calibragem = $calibragem;
        $this->marca = $marca;
        $this->cor = $cor;
        $this->modelo = $modelo;
        
    }


    function __toString(): string{

        return "Aro: $this->aro <br>Calibragem: $this->calibragem <br> Marca: $this->marca <br> Cor: $this->cor <br> Modelo: $this->modelo";
        
    }
}


$caranga = new Carro(40,20,'Jaguar','Rosa', 'bem soft');

echo $caranga ;