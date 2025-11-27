<?php


$HOST = 'localhost:3306';
$USER = 'root' ;
$SENHA = 'M@gnus1990';
$BANCO = 'loja_de_carros' ;


try{

    $conn = new mysqli($HOST,$USER,$SENHA , $BANCO);

}catch(Exception $err){

    echo 'Erro ao tentar se conectar com o banco! <br>'. $err;

}


try{
    $result = $conn->query('SELECT c.nome, c.genero, car.nome_carro , car.fabricante, car.preco_unitario FROM cliente c join compra comp ON c.cpf_cliente = comp.cpf_cliente JOIN carros car ON comp.id_carro = car.id_linha');

    $data = $result->fetch_all();

    foreach($data as $row){
        foreach($row as $label => $valor){
            echo " $label => $valor <br>";
        }
        echo "<br>";
        


    }

}catch(Exception $erro){
    echo 'Erro ao executar a query' . $erro;

}


