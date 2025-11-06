<?php

$dados =  [
    "nome" => 'Jorge' , 
    "Idade" => 25
];

echo array_key_exists("nome",$dados) ;
echo "<br> ";
echo isset($dados['nome']) ;