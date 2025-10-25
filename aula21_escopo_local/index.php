<?php

$x = 10 ;

echo $x ," Global <br>";

function teste(){
    $x = 5 ;
    echo $x ,"  Local <br>";
}

teste();