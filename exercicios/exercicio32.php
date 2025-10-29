<?php


function verificarCategoria($categoria){

    switch($categoria){
    
    case 'eletrônicos':
        echo 'Essa categoria é de produtos eletrônicos';
        break ;

    case 'vestuário' :
        echo  'Essa categoria é de produtos de vestuário';
        break ;

    case 'alimentos' :
        echo 'Essa categoria é de produtos alimentícios' ;
        break ;
    
    default :
        echo 'Categoria desconhecida';
        break ;
    
    
    
    
    
    
    }
}


verificarCategoria('futebol');