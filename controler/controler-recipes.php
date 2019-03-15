<?php 
include_once 'controler/Autoloader.php';
Autoloader::register();
$modeleRecette = new ModeleRecette();
$recettes = $modeleRecette->recipeCategory();
