<?php

$HOST = 'localhost:3306';
$USER = 'root';
$SENHA = 'M@gnus1990';
$BANCO = 'cursophp';


try{

    $conn = new PDO("mysql:host=$HOST;dbname=$BANCO",$USER,$SENHA);

    

}catch(Exception $err){

    echo "Erro ao tentar se conectar!";

}


$chassi = 2222;
$marca = 'Honda';
$nome = 'Fit';
$potencia = 160;



$stmt = $conn->prepare("INSERT INTO carros VALUES(:chassi , :marca , :nome , :potencia)");



$stmt->bindParam(":chassi", $chassi);
$stmt->bindParam(':marca' , $marca);
$stmt->bindParam(":nome", $nome);
$stmt->bindParam(":potencia", $potencia);


$stmt->execute();


