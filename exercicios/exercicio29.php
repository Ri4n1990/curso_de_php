<?php



function compararNumeros($num1 , $num2){
    
    $teste = $num1 <=> $num2 ;
    
    switch($teste){

        case 0 :
            echo "Os números são iguais." ;
            break ;

        case 1 :
            echo  "O primeiro número é maior. " ;
            break ;

        case -1 :
            echo  "O segundo número é maior." ;

            break ;
        
        
    }
    
    
}

compararNumeros(1,1) ;