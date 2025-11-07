<?php


function ordenarNumeros($arr){

    foreach($arr as $valor){
        if(! is_int($valor)){
            
            return "Array inválido !";

        }

    }

      sort($arr) ;
      return $arr ;
   

}


$numeros = range(20,0);

print_r($numeros) ;

echo "<br>" ;

print_r(ordenarNumeros($numeros)) ;
