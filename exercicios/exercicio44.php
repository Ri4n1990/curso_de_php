<?php




function verifica($num){

    $calc = $num % 2 ;

    switch($calc){

        case 0:
            echo "O número $num  é par" ;
            break;
        case 1:
            echo "O número $num é ímpar";
            break ;
        
        default : 
            echo 'Divisão errada!';
            break ;
      

    }


}

verifica(-1) ;