<?php
$id = filter_input(INPUT_GET,'id');
$recette = new ModeleOneRecipe();
$cart = new ModeleCart();
$list= $recette->ingredientsList($id);
$uneRecette = $recette->recipe($id);