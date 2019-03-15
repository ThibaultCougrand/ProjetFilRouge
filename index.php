<?php

$loc = filter_input(INPUT_GET, 'loc');
if (!$loc) {
    $loc = 'home';
}

$image = "asset/" . $loc . ".jpg";
if (!file_exists($image)) {
    $image = "asset/home.jpg";
}
include_once 'controler/Autoloader.php';
Autoloader::register();

switch ($loc) {
    case 'recipes':
        include_once "controler/controler-recipes.php";
        break;
    case 'signinup':
        include_once 'controler/controler-signinup.php';
        break;
    default:
        break;
}
include "vue/template.php";
