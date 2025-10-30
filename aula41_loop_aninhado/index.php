<?php

$i  = 0 ;


while($i <10){

    echo 'loop externo' . $i . '<br>';


    $i ++ ;

    $j = 1 ;

    while($j <=5){

        echo "loop interno $j <br>" ;
        $j ++ ;




    }


    


}