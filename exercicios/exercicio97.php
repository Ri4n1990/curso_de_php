<?php 



class Contact{

    public $name;
    public $email;
    public $phone;


    function __construct($name,$email,$phone){

        $this->name = $name ;
        $this->email = $email;
        $this->phone = $phone;

    }
    

    public function getName(): string{

        return $this->name;
        
    }

    public function getEmail(): string{

        return $this->email;

    }

    public function getPhone(): string{
        return $this->phone;

    }


    public function setEmail($novoEmail):void {
        $this->email = $novoEmail;
        
    }


    public function setPhone($novoPhone): void{

        $this->phone = $novoPhone ;

    }


    function __toString(): string{

        return "Name: $this->name<br>Email: $this->email<br>Phone: $this->phone";
        
    }




}



$contatin = new Contact('Docinho', 'docin66@gmail.com', '51998654329') ;

echo $contatin->getEmail();

// echo $contatin ;