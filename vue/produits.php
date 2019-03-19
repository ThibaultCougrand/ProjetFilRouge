<?php if (!isset($produits)) {
    $produits = [];
}
if (!isset($categories)) {
    $categories =  [];
}
?>
<article class="container-ing">
    <aside>
        <ul>
            <?php
            if (count($categories) > 0) {
                foreach ($categories as $value) {
                    echo '<li class="taille-filtre un-filtre category-ing" data-id="' . $value->id() . '">' . $value->name() . '</li>';
                }
            } else {
                echo ("error");
            }
            ?>
        </ul>
    </aside>
    <div class="ingredient">
    <article id="les-articles">
        <?php
        foreach ($produits as $value) {

            ?>
        
            <figure>
                <a href=""><img src="<?= $value->image(); ?>" alt="<?= $value->name(); ?>"></a>
                <figcaption><?= $value->name(); ?></figcaption>
                <div class="wrap-button">
                    <p><?= $value->affichePrix(); ?></p>
                    <button><i class="fas fa-cart-plus"></i></button>
            </figure>
            <?php 
        }
        ?>
        </article>
    </div>
</article> 