<?php
$modeleRecette = new ModeleRecette();
$categoryRecettes = $modeleRecette->recipeCategory();
$recettes = $modeleRecette->lastRecipes();
