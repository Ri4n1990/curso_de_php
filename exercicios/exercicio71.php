<?php

$dados = ['nome1' => 'gordin' , 'idade1' => 15 , 'nome2' => 'meu patrão', 'idade2' => 23  ]  ;


echo  
"<table>
    <thead>
        <th>Nome</th>
        <th>Idade</th>
    </thead>

    <tbody>
        <tr>
            <td> {$dados['nome1']}</td>
            <td>{$dados['idade1']}</td>

        </tr>

         <tr>
            <td> {$dados['nome2']}</td>
            <td>{$dados['idade2']}</td>

        </tr>
    </tbody>





</table>"


;