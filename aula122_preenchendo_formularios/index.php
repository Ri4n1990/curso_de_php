<?php


$usuario = [

    'nome' => 'Matheus' ,
    'idade' => 29,
    'profissao' => 'programador'


];


if($usuario){

    $nome = $usuario['nome'];
    $idade = $usuario['idade'];
    $profissao = $usuario['profissao'];


}



?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

<form action="#">

<div>

    <input type="text" name="nome" id="nome" value="<?= $nome  ?>" >

</div>


<div>

    <input type="number" name="idade" id="idade" value="<?= $idade ?>">

</div>





</form>


    
</body>
</html>