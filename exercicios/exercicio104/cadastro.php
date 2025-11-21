<?php

$nome = $_GET['nome'];
$nascimento = $_GET['nascimento'];

$dataObj = DateTime::createFromFormat('d/m/Y', $nascimento);
$dataFormatada = $dataObj->format('Y-m-d'); 

?>


<p><?= $dataFormatada ?></p>