<?php






function sumEvenNumbers($num){
    $soma = null ;
    $numeros = [] ;
    for($num ; $num >0 ; $num-- ){

        if($num % 2 == 0){
            $soma += $num ; 
            array_push($numeros , $num) ;



        }

    }

    foreach($numeros as $key => $num){

        if($key == count($numeros) -1){
            echo "$num = " ;
            break;
        }
        echo $num . "+" ;
    }

    echo  $soma;

    

}



sumEvenNumbers(20);