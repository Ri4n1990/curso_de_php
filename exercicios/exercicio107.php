<?php

    if(isset($_FILES)){

        print_r($_FILES);

    }




?>





<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>arquivos</title>
</head>
<body>


<form action="exercicio107.php" method="post" enctype="multipart/form-data">


    <div>
    
    <label for="arqu">Arquivo</label> <br>
    <input type="file" name="arqu" id="arqu">

    </div>

    <input type="submit" value="Enviar">



</form>
    
</body>
</html>