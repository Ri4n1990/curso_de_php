<?php


abstract class Mensagens{

    abstract public function bomDia();
    abstract public function boaTarde();
    abstract public function boaNoite();


}



class Comunicador extends Mensagens{

    public function bomDia(): void{

        echo "Bom dia!";

    }

    public function boaTarde(): void{
        echo "Boa tarde!";
    }

    public function boaNoite(): void{
        echo "Boa noite";
    }
}




$locutor = new Comunicador ;

$locutor->bomDia();