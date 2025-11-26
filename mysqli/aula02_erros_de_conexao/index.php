<?php

$HOST = '127.0.0.1';
$PORT = 3306;
$USER = 'root';
$SENHA = 'M@gnus1990'; 




try{
    $conn = new mysqli($HOST, $USER, $SENHA, 'cursophp', $PORT);

    

}catch(Exception $err){
    

    echo "deu ruim";

}











