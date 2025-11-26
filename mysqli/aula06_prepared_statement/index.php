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

$chassi = 2020;
$marca = 'mitsubishi';
$nome = 'lancer';
$potencia = 600;

$stmt = $conn->prepare("INSERT INTO carros VALUES (?, ?, ?, ?)");


$stmt->bind_param("issi",$chassi,$marca,$nome,$potencia) ;


$stmt->execute() ;

