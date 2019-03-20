<article class="container-panier">
    <h1 class="titre-panier">Votre panier</h1>
    <?php
    foreach ($data['recette'] as $key => $value) {
        $list = $recette->ingredientsList($key);
        $uneRecette = $recette->recipe($key);
        echo '<h2 class="titre-recette">' . $uneRecette->name() . '</h2>';
        echo '<ul class="ul-panier">';
        foreach ($list as $ingredient) {
            echo '<li class="taille-filtre un-ingredient ingredient-modif" data-id="' . $ingredient->id() . '"><img src="' . $ingredient->image() . '"><span>'
                . $ingredient->name() . " </span><span class=qtx-unite>" . $ingredient->qtx() * $value . " " . $ingredient->unite()
                . '</li>';
        }
        echo '</ul>';
    }
    ?>
</article> 