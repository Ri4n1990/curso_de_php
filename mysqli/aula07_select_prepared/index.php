<?php

$HOST = 'localhost:3306' ;
$USER = 'root';
$SENHA = 'M@gnus1990';
$BANCO = 'cursophp' ;


try{

    $conn = new mysqli($HOST , $USER, $SENHA, $BANCO);

}catch(Exception $erro){

    echo "Erro ao tentar se conectar com o banco!";

}


$potencia = 200;

$stmt = $conn->prepare('SELECT * FROM carros WHERE potencia >= ?');

$stmt->bind_param('d', $potencia);

$stmt->execute();

$result = $stmt->get_result();

$data = $result->fetch_all();
// $data = $result->fetch_row(); no caso de querer retornar apenas uma linha

$stmt->close();

print_r($data) ;

