<?php



$dados = ["Nome" => 'Jorge' , "Idade" => 12] ;

foreach($dados as $key => $value){
   $msg =  isset($dados[$key]) ? "A chave $key Existe" :  "A chave $key não existe" ;
   echo $msg . "<br>";
}
