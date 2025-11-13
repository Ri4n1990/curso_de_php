<?php 


class Passenger{

    public $name;
    public $age;
    public $seatnumber;


    function __construct($name,$age,$seatnumber){

        $this->name = $name;
        $this->age = $age;
        $this->seatnumber = $seatnumber;

        
    }


    public function getName():string{

        return $this->name;


    }


    public function getAge(){

        return $this->age ;
    }

    public function getseatNumber(){

        return $this->seatnumber ;

    }

    public function setSeatnumber($novonum): void{

        $this->seatnumber = $novonum ;
        
    }

}

