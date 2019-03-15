<?php
$id = filter_input(INPUT_GET,'id');
$ingredients = new ModeleOneRecipe();
$list= $ingredients->ingredientsList($id);