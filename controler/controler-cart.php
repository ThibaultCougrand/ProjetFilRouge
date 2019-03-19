<?php
$cookie = $_COOKIE['panier'];
$data = json_decode($cookie,true);
foreach ($data['recette'] as $key => $value) {
    /* echo ' recette numero : '.$key.' x';
    print_r($value); */
}