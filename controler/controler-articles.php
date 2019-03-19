<?php
$id = filter_input(INPUT_GET,'id');
$modeleArticle = new ModeleArticle();
$categories = $modeleArticle->categoryOfIngredients();
if($id){
    $produits = $modeleArticle->articlesByCategory($id);
}else{
    $produits = $modeleArticle->articlesAll();
}

