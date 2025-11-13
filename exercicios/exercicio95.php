<?php 




// class Calculadora{

//     public function somar(...$numeros):float|int{

//         $soma = null;

//         foreach($numeros as $num){

//             $soma+= $num ;

//         }


//         return $soma;



//     }


//     public function subtracao(...$numeros): float|int{

//         $subtracao= null;

//         foreach($numeros as $num){

//             $subtracao-= $num;

//         }

//         return $subtracao ;
//     }



//     public function multiplicacao(...$numeros): float|int{

//         $multiplicacao = 1 ;

//         foreach($numeros as $num){
//             $multiplicacao *= $num ;
//         }

//         return $multiplicacao ;
        
//     }



//     public function divisao(...$numeros){
//         $divisao = $numeros[0] ;

//         foreach($numeros as $key =>$num){

//             if($key == 0 ){
//                 continue ;

//             }

//             $divisao /= $num ;

//         }

//         return $divisao ;
//     }

// }






// $calc = new Calculadora();

// echo $calc->somar(-5,2) . "<br>" ;

// echo $calc->subtracao(-5,-6) . "<br>";

// echo $calc->multiplicacao(5,5) . "<br>";

// echo $calc->divisao(10,2);

