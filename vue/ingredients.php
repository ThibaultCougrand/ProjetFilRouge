<?php if (!isset($ingredients)) {
    $ingredients = [];
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
                    echo '<li class="un-filtre" data-id="' . $value->id() . '">' . $value->name() . '</li>';
                }
            } else {
                echo ("error");
            }
            ?>
        </ul>
    </aside>
    <div class="ingredient">
        <?php
        foreach ($ingredients as $value) {
         
            ?>
        <figure>
            <img src="<?=$value->image();?>" alt="<?=$value->name();?>">
            <figcaption><?=$value->name();?></figcaption>
            <div class="wrap-button">
                <p><?=$value->affichePrix();?></p>
                <button><i class="fas fa-cart-plus"></i></button>
            </div>

        </figure>
        <?php 
    }
    ?>

    </div>
</article> 