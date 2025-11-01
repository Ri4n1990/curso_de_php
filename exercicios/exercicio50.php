<?php



function countVowels($palavra){
    $palavra = strtoupper($palavra) ;
    $qtd_vogais = 0 ;
    $tam = mb_strlen($palavra) - 1;
    $vogais = ['Ã','E','I','O','U', 'A', 'Í','É','À', 'Õ'] ;
    for($tam ; $tam>=0 ; $tam--){

        

        foreach($vogais as $vogal){
            

            if(mb_substr($palavra , $tam , 1) == $vogal){
                $qtd_vogais++ ;
                break ;
            }
        }

    }

    return $qtd_vogais ;
    


}



echo countVowels('Ã') ;

