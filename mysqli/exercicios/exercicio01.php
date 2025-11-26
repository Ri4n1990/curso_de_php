<?php

$HOST = 'localhost:3306';
$USER = 'root' ;
$SENHA = 'M@gnus1990';
$BANCO = 'cursophp' ;

try{

    $conn = new mysqli($HOST , $USER, $SENHA , $BANCO);

    $stmt = "SELECT * FROM pessoas";

    $query = $conn->query($stmt) ;

    $resultado = $query->fetch_all() ;

    foreach($resultado as $row){{
        foreach($row as $key => $value){
            echo "$key => $value <br>";

        }
        echo "<br>" ;
    }

    }
    


}catch(Exception $erro){

    echo 'Erro!';


}


