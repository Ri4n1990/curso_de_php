<?php

$HOST = 'localhost:3306' ;
$USER = 'root';
$SENHA = 'M@gnus1990' ;
$BANCO = 'cursophp'; 



try{
    $conn = new mysqli($HOST,$USER,$SENHA,$BANCO) ;

}catch(Exception $erro){

    echo "Erro ao tentar se conectar";

}


$sql = "SELECT * FROM carros ";

$result = $conn->query($sql) ;

print_r($result) ;




$conn->close();


