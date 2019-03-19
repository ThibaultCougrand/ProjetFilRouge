<?php if (!isset($list)) {
    $list = [];
}
?>
<div class="container-uneRecette">
    <aside class="container-aside ingredient-list">
        <ul class="ul-ingredient-list">
            <?php 
            if (count($list) > 0) {              
                foreach ($list as $value) {
                    echo '<li class="taille-filtre un-ingredient" data-id="' . $value->id() . '"><img src="'.$value->image().'"><span>'
                        . $value->name() . " </span><span class=qtx-unite>" . $value->qtx() . " " . $value->unite()
                        . '</li>';
                }
            } else {
                echo ("error");
            }
            ?>
        </ul>
        <button class="ajout-panier">Ajouter au panier</button>
    </aside>
    <article class="uneRecette">
        <figure>
            <img src="<?= $uneRecette->image(); ?>" alt="<?= $uneRecette->name(); ?>">
            <h1><?= $uneRecette->name(); ?></h1>
            <figcaption><?= $uneRecette->description(); ?></figcaption>
        </figure>
    </article>
</div> 