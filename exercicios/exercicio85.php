<?php

class conexao{

    private const varbd = 'mysql+mysqlconnector://M@gnus:1234@localhost/bd_loja' ;


    public function get_varbd(): string{

        return self::varbd ;

    }
}



$conn = new conexao; 

$varconn = $conn->get_varbd();

echo $varconn;

