<?php


$a = 10 ;


while($a > 0){

    
    $a-- ;
    if($a == 5 || $a == 7){
        echo "pulou a execução $a <br>";
        $a-- ;
        continue ;

    }
    
    echo "Executando o loop $a <br>" ;

}