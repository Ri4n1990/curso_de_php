<?php



function consultaPreco($produto){

    
    $produto = strtolower($produto);
    $produtos = ['carro' => 1000, 'meia' => 19.90 , 'bola' => 5 , 'chinelo' => 20];
    
    foreach($produtos as $key => $value){
        if($key == $produto){
            return $produtos[$produto] ;
        }

    }
    return 'Produto não encontrado :(';

    
    
}



echo consultaPreco('meia');