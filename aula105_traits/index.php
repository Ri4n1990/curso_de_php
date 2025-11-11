<?php


trait objeto{
    public function teste(): void{

        echo "Testando trait de objeto <br>";


    }
}



trait Testando{

    public $y ;

    public function traitteste(): void{

        echo "este método é da trait testando <br>";



    }
}

class Central{

    use objeto ;
    use Testando; 



}


$x = new Central ;

$x->teste() ;

$x->traitteste();