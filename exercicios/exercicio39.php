<?php

// $inicio = 1 ;
// $fim = 20 ;


// for($inicio; $inicio <= $fim ; $inicio++){
//     echo $inicio . "<br>" ;
// }

// echo 'Fim';


// for($cont = 10 ; $cont >=0 ; $cont--){
//     echo $cont . "<br>"; 
// }

// $cont = 0 ;

// while(true){


//     if($cont ==20){
//         break ;

//     }

//     $cont+=2 ;
//     echo $cont . '<br>';

    

// }


$arr = ['Nome' => 'Jorgin' , 'Idade' => 21 , 'Genero' => 'Machão' , 'Cargo' => 'Submiso(kkk)'] ;



foreach($arr as $key => $value){

    echo "$key : $value <br>" ;

}



$seq = [1,4,3,2,4,5,6,5,4,3,6,7,4,3,4,3,5,6] ;

$cont = 0 ;

foreach($seq as $valor){
    $cont +=$valor ;

}
$media = $cont / count($seq);

echo "Média: " . number_format($media, 2, ',') ;





