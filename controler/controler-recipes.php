<?php 
include_once 'modele/ClassConnexion.php';
include_once 'modele/ClassRecette.php';
include_once 'modele/ModeleRecette.php';
$modeleRecette = new ModeleRecette();
$recettes = $modeleRecette->recipeCategory();

