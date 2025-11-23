
<?php

if(array_key_exists('conhecimentos' , $_POST)){
    $conhecimentos = $_POST['conhecimentos'] ;

}
    


?>











<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados cliente</title>
</head>
<body>

    <?php

    if($_POST):


    ?>

<form action="#">

    <div>
        <label for="nome">Nome</label> <br>
        <input type="tel" name="nome" id="nome" value="<?= $_POST['nome'] ?>">

    </div>

    <div>
        <label for="idade">Idade</label> <br>
        <input type="number" name="idade" id="idade" value="<?= $_POST['idade'] ?>">
    </div>

</form>
    
    <ul>
        <?php  foreach($conhecimentos as $con) : ?>
            
            <li><?= $con ?></li>
            
        
        <?php endforeach ; ?>




    </ul>


    <?php

    endif;
    
    
    
    ?>
    
</body>
</html>
