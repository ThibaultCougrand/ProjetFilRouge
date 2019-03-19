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
    case 'signin':
        include_once 'controler/controler-signin.php';
        $loc = 'sign-in-up';
        break;
    case 'signup':
        include_once 'controler/controler-signup.php';
        $loc = 'sign-in-up';
        break;
    case 'ingredients':
        include_once "controler/controler-ingredients.php";
        break;
    case 'recipes':
        include_once "controler/controler-recipes.php";
        break;
    case 'one-recipe':
        include_once "controler/controler-one-recipe.php";
        break;
    case 'produits':
        include_once "controler/controler-articles.php";
        break;
    default:
        break;
}
include "vue/template.php";
