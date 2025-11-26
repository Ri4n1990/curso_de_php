<?php

$HOST = 'localhost:3306';
$USER = 'root';
$SENHA = 'M@gnus1990';
$BANCO = 'cursophp' ;



try{

    $conn = new mysqli($HOST,$USER,$SENHA,$BANCO);


}catch(Exception $erro){

    echo "Erro ao tentar se conectar";

}


$stmt = "INSERT INTO carros VALUES(1020,'fiat','argo',200)";

$exec = $conn->query($stmt) ;

$conn->close();

