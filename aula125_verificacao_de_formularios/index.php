<?php


    if(count($_POST) == 0 ){

        $validacoes = [] ;

        if(! $_POST['nome']){

            $validacoes[] = 'por favor preencha o nome do usuário' ;



        }

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

<form action="index.php" method="POST">

    <div>
        <input type="text" name="nome" id="nome" placeholder="digite o seu nome">
    </div>

     <div>
        <input type="email" name="email" id="email" placeholder="digite o seu email">
    </div>

     <div>
        <input type="password" name="senha" id="senha" placeholder="digite a sua senha">
    </div>


    <input type="submit" value="Enviar">


</form>
    
</body>
</html>