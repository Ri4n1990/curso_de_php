<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>

    <style>

        div{

            display: flex;
            flex-flow: column nowrap;
            align-items: flex-start;
            justify-content: center;
            margin: 10px;
        }
    </style>
</head>

<body>

<form action="cadastro.php" method="GET">

    <div>

        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome">

    </div>

    <div>
        <label for="nascimento">Data de nascimento</label>
        <input type="date" name="nascimento" id="nascimento">
    </div>

    <button type="submit">Cadastrar</button>




</form>
    
</body>

</html>