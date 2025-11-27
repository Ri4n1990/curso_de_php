<?php


$HOST = 'localhost:3306';
$USER = 'root';
$SENHA = 'M@gnus1990';
$BANCO = 'loja_de_carros' ;


try{

    $conn = new PDO("mysql:host=$HOST;dbname=$BANCO",$USER, $SENHA);
    echo "Conectado com sucesso!";

}catch(Exception $erro){

    echo "Erro ao tentar se conectar.";


}

try{

    $id = 1;

    $stmt = $conn->prepare("SELECT * FROM carros WHERE id_linha = :id ");

    $stmt->bindParam(':id', $id);

    $stmt->execute();

    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

    print_r($data) ;

}catch(Exception $err){

    echo $err ;

}





