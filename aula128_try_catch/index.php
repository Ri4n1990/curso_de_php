<?php

/*

try - conter código que desejamos executar
catch - captura as exeções 
throw - permite lançar exeções personalizadas

*/



function dividir($dividendo , $divisor){

    try{
        if($divisor == 0){
            throw new Exception('Divisão por zero não é permitida!');
        }

        $result = $dividendo / $divisor ;
        return $result ;

    }catch(Exception $err){

        echo "algo saiu errado! " . $err->getMessage() ;

        return "" ;



    }

}



$resultado_dividir = dividir(10,0);
echo "Resultado da divisão".$resultado_dividir ;















