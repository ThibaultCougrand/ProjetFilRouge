<?php if (!isset($produits)) {
    $produits = [];
}
if (!isset($categories)) {
    $categories =  [];
}
?>
<article class="container-ing">
    <aside class="container-aside">
        <ul>
            <?php
            if (count($categories) > 0) {
                //categorie est un tableau d'objet qui est instancié et défini dans le controler
                foreach ($categories as $value) {
                    //permet de mettre l'id de l'objet contenu dans le tableau d'objet sur le data-id
                    // (id propre correspondant à la requête sur la bdd)
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