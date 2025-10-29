<?php




function verificarAcesso($idade , $autorizacao){

    if($idade >=18 && $autorizacao == true){
        echo "Acesso autorizado" ;
        return ;
    
    }

    else if($idade >=18 && $autorizacao == false){

        echo "Acesso negado. Autorização necessária" ;
        return ;
    }
    

    echo " Acesso negado. Idade mínima requerida: 18 anos ";
    



}





verificarAcesso(15, true) ;