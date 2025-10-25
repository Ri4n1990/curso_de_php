<?php



$pessoa = [
    'nome' => 'judskreison',
    'idade' => 20,
    'altura' => 1.80


];

if($pessoa['idade'] >=18){
    echo 'o ', $pessoa['nome'], ' tem ', $pessoa['idade'], ' anos logo é maior de idade';
    return  ;

}

echo  'o ', $pessoa['nome'], ' não é maior de idade'; 