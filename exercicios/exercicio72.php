<?php


$ranking = [

    'clebão' => 10 ,
    'edinho' => 4 ,
    'doca nua' => 9 ,
    'quexada' => 6

];


ksort($ranking) ;

?>

<ul>
    <?php foreach($ranking as $key => $value):  ?>

        <li><?= $key . " " .  $value?></li>

    <?php endforeach;?>
</ul>