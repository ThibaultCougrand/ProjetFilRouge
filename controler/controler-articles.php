<?php
$id = filter_input(INPUT_GET,'id');
$modeleArticle = new ModeleArticle();
//dans le controler on instancie l'objet pour l'utiliser dans la vue
$categories = $modeleArticle->categoryOfIngredients();
// retourne un tableau d'objet de category
if($id){
    $produits = $modeleArticle->articlesByCategory($id);
}else{
    $produits = $modeleArticle->articlesAll();
}

