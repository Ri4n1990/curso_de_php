<?php



$num1 = 51 ;
$texto = 'lala' ;

$num2 = 15 ; 

if(is_numeric($num1)){
    echo 'é número <br>' ; 

    $soma  =  $num1 * 2 ;

    echo "$soma <br>" ;

    if($soma > 100){
        echo 'sim é maior que cem ' ;
    }else{
        echo 'não é maior que cem ';
    }

}else{

    echo 'não é número' ;

} 

