<?php if ($cookie == null || $data["recette"] == null && $data["produits"] == null) {
    ?>
<article>
    <div class="container-panier-vide">
        <h2>Votre panier est vide</h2>
        <a href="?loc=produits">Retourner à la séléction des produits ?</a>
</article>
</div>
<?php

} else {
    if ($data["recette"] != null) {
        ?>
<article class="container-panier">
    <h1 class="titre-panier">Votre panier</h1>
    <?php
    foreach ($data['recette'] as $key => $value) {
        $list = $recette->ingredientsList($key);
        $uneRecette = $recette->recipe($key);
        $priceRecipe = $recette->totalPrice($key);
        if (count($list) > 0) {
            echo '<h2 class="titre-recette">Vous avez choisit: ' . $uneRecette->name() . ' ' . $value . 'x</h2>';
            echo '<ul class="ul-panier">';

            foreach ($list as $ingredient) {
                echo '<li class="taille-filtre un-ingredient ingredient-modif" data-id="' . $ingredient->id() . '"><img src="' . $ingredient->image() . '"><span>'
                    . $ingredient->name() . " </span><span class=qtx-unite>" . $ingredient->qtx() * $value . " " . $ingredient->unite()
                    . ' ' . $ingredient->price() * $value . '€</li>';
            }
            echo '</ul><div class="prix-total taille-filtre">Prix total de la recette : ' . $priceRecipe * $value . '€</div>';
            echo "<button class='suppression-recette' data-id=" . $key . ">Supprimer la recette ?</button>";
        } else {
            echo "<h2 class='titre-recette'>La recette : " . $uneRecette->name() . " n'a actuellement pas d'ingredient
        veuillez nous excusez pour cette erreur</h2>";
        }
    }
    ?>
</article>
<?php 
}
if ($data['produits'] != null) {
    ?>
<article class="container-panier">
    <h1 class="titre-panier">Vos ingrédients</h1>
    <ul class="ul-panier">
        <?php
       $total=0;
        foreach ($data['produits'] as $key => $value) {
             
             $article = $produits->readArticleById($key);
            $total += $article->prix() * $value;
            if ($article != false) {
                echo '<li class="taille-filtre un-ingredient ingredient-modif" data-id="' . $article->id() . '"><img src="' . $article->image() . '"><span>'
                    . $article->name() . " </span><span class=qtx-unite>" . $article->qtx() * $value . " " . $article->unit()
                    . ' ' . $article->prix() * $value . '€</li>';
                    echo "<button class='suppression-produit' data-id=" . $key . ">Supprimer le produit ?</button>";
            }
        }
        echo '<li class="prix-total taille-filtre">Prix total : ' .$total. '€</li>';
        ?>
    </ul>
</article>
<?php 
}
}
