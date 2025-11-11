<?php



interface Basico{
    public const placa = "avu-34r5";
    public function ligar();
    public function acelerar();


}




class Carro implements Basico{

    public function ligar(): void{

        echo "Ligou";
        

    }

    public function acelerar(): void{

        echo "vrummmmm";

    }
}




$porche = new Carro;

echo $porche::placa;


