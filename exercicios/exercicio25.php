<?php


$texto = 'oi' ;
$flutuante =  12.5 ;
$inteiro = 2 ;

if(get_debug_type($texto) == 'int'){
    echo 'A variável é um int!';

}else{
    echo 'A variável não é inteiro';
}
echo '<br>' ;


$resultado = get_debug_type($flutuante) == 'int' ? 'é um inteiro': 'Não é inteiro!' ;

echo $resultado ;

echo '<br>' ;

if(get_debug_type($inteiro) == 'int'){
    echo 'é inteiro';
}else{
    echo 'não é inteiro ' ;
}