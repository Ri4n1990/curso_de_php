<?php


$HOST = 'localhost:3306';
$USER = 'root';
$SENHA = 'M@gnus1990' ;
$BANCO = 'cursophp' ;




try{

    $conn = new mysqli($HOST,$USER,$SENHA,$BANCO) ;


}catch(Exception $erro){
    echo "erro ao tentar se conectar" ;

}




// $q = "CREATE TABLE teste(
//     nome VARCHAR(100),
//     sobrenome VARCHAR(100)



// )" ;


$q = "DROP TABLE teste";





$conn->query($q);

$conn->close();


