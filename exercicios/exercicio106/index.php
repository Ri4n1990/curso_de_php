<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulário</title>

</head>

<body>

    <form action="cad.php" method="POST">

    <div>
        <label for="nome"></label>
        <input type="text" name="nome" id="nome" placeholder="Seu nome">
    </div>

    <div>
        <label for="idade"></label>
        <input type="number"  name="idade" id="idade" value="0" >
    </div>

    <div>
        
        <input type="checkbox" name="conhecimentos[]" id="html" value="Html"> 
        <label for="html">Html</label>
    </div>

    <div>
        <input type="checkbox" name="conhecimentos[]" id="css" value="css">
        <label for="css">Css</label>
    </div>    


    <div>
        <input type="checkbox" name="conhecimentos[]" id="javascript" value="javascript">
        <label for="javascript">Javascript</label>
    </div>

    <div>
        <input type="checkbox" name="conhecimentos[]" id="php" value="php">
        <label for="php">PHP</label>
    </div>


    <button type="submit">Enviar</button>





    </form>
    
</body>


</html>