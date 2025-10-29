<?php

function calcularDesconto($valor , $tipo){

    $val_desc = null ;

    switch($tipo){

        case 'eletrônicos':
            $val_desc = 10 ;
            break ;

        case 'vestuário' :
            $val_desc = 20 ;
            break ;

        case 'alimentos' :
            $val_desc =  5;
            break ;

    }

    $valor_descontar = ($valor * $val_desc) / 100 ; 
    $total = $valor - $valor_descontar ;

    echo "Total sem desconto $valor R$ <br>Total com desconto $total R$" ;

}


calcularDesconto(35 , 'alimentos') ;