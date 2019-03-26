<?php
if (isset($_COOKIE['panier'])) {
    $cookie = $_COOKIE['panier'];
    $data = json_decode($cookie, true);
    $recette = new ModeleOneRecipe();
} else {
        $cookie=null;
    }