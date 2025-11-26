<?php


$HOST = 'localhost:3306';
$USER = 'root';
$SENHA = 'M@gnus1990' ;
$BANCO = 'cursophp' ;



try{

    $conn = new mysqli($HOST,$USER,$SENHA,$BANCO);

}catch(Exception $erro){
    
    echo "Erro ao tentar se conectar" ;

}


// $chassi = 2020;

// $stmt = $conn->prepare("DELETE FROM carros where chassi = ?");

// $stmt->bind_param('i', $chassi);

// $stmt->execute() ;


$chassi = 10029;
$novo_nome = 'equinox';
$nova_marca = 'chevrolet' ;

$stmt = $conn->prepare('UPDATE carros SET nome = ? , marca = ? WHERE chassi = ? ');

$stmt->bind_param('ssi', $novo_nome, $nova_marca, $chassi);



$stmt->execute() ;