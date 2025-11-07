<?php

use LDAP\Result;

function checkEmail($email){

    if(! is_string($email)){
        return "A função aceita somente strings" ;
    }

    $email = trim($email) ;
    

    $patern = "/^\w+@[A-Za-z]+\.[A-Za-z]+$/" ;

    $msg = preg_match($patern, $email) ? "Email válido" : "Email inválido" ;

    return $msg ;
}




$myemail = 'rianmagnus5791@gmail.com' ;

$result = checkEmail($myemail) ;

echo $result ;

