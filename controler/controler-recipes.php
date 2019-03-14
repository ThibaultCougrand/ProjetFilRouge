<?php 
include_once 'modele/ClassConnexion.php';
include_once 'modele/Recette.php';
include_once 'modele/ModeleRecette.php';
$modeleRecette = new ModeleRecette();
$recettes = $modeleRecette->recipeCategory();

