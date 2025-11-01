<?php

$url = 'https://www.google.com/?busca=php';

$arrayurl = parse_url($url) ; 

print_r($arrayurl);

