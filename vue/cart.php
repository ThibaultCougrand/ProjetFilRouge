<article class="container-panier">
    <h1 class="titre-panier">Votre panier</h1>
    <?php
    foreach ($data['recette'] as $key => $value) {
        $list = $recette->ingredientsList($key);
        $uneRecette = $recette->recipe($key);
        $priceRecipe = $recette->totalPrice($key);
        if(count($list)>0){
        echo '<h2 class="titre-recette">' . $uneRecette->name() . '</h2>';
        echo '<ul class="ul-panier">';
        
        foreach ($list as $ingredient) {
            echo '<li class="taille-filtre un-ingredient ingredient-modif" data-id="' . $ingredient->id() . '"><img src="' . $ingredient->image() . '"><span>'
                . $ingredient->name() . " </span><span class=qtx-unite>" . $ingredient->qtx() * $value . " " . $ingredient->unite()
                .' '.$ingredient->price()*$value. '€</li>';
        }
        echo '</ul><div class="prix-total">'.$priceRecipe*$value.'</div>';
    }
    else{
        echo "<h2 class='titre-recette'>La recette : ". $uneRecette->name() . " n'a actuellement pas d'ingredient
        veuillez nous excusez pour cette erreur</h2>";
    }
}
    ?>
</article> 