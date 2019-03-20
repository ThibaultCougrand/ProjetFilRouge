<?php
$cookie = $_COOKIE['panier'];
$data = json_decode($cookie,true);
$recette = new ModeleOneRecipe();
$cart = new ModeleCart();