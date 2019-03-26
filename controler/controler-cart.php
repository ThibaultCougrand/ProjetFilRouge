<?php
if (isset($_COOKIE['panier'])) {
    $cookie = $_COOKIE['panier'];
    $data = json_decode($cookie, true);
    $recette = new ModeleOneRecipe();
    $produits = new ModeleArticle();
} else {
        $cookie=null;
    }