<?php if (!isset($ingredients)) {
    $ingredients = [];
}
?>
<article class="container-ing">
    <aside>
        <ul>
            <?php
            if(count($ingredients) > 0){
                foreach ($ingredients as $value) {
                    echo '<li class="un-filtre" data-id="' . $value->id() . '">' . $value->name() . '</li>';
                }
            }else {
                echo ("error");
            }
            ?>
        </ul>
    </aside>
    <div class="ingredient">
        <figure>
            <img src="asset/recipes.jpg" alt="">
            <figcaption>Ici ingrédient</figcaption>
            <div class="wrap-button">
                <p>Prix</p>
                <button><i class="fas fa-cart-plus"></i></button>
            </div>

        </figure>
        <figure>
            <img src="asset/recipes.jpg" alt="">
            <figcaption>Ici ingrédient</figcaption>
            <div class="wrap-button">
                <p>Prix</p>
                <button><i class="fas fa-cart-plus"></i></button>
            </div>
        </figure>
        <figure>
            <img src="asset/recipes.jpg" alt="">
            <figcaption>Ici ingrédient</figcaption>
            <div class="wrap-button">
                <p>Prix</p>
                <button><i class="fas fa-cart-plus"></i></button>
            </div>
        </figure>
        <figure>
            <img src="asset/recipes.jpg" alt="">
            <figcaption>Ici ingrédient</figcaption>
            <div class="wrap-button">
                <p>Prix</p>
                <button><i class="fas fa-cart-plus"></i></button>
            </div>
        </figure>
        <figure>
            <img src="asset/recipes.jpg" alt="">
            <figcaption>Ici ingrédient</figcaption>
            <div class="wrap-button">
                <p>Prix</p>
                <button><i class="fas fa-cart-plus"></i></button>
            </div>
        </figure>
        <figure>
            <img src="asset/recipes.jpg" alt="">
            <figcaption>Ici ingrédient</figcaption>
            <div class="wrap-button">
                <p>Prix</p>
                <button><i class="fas fa-cart-plus"></i></button>
            </div>
        </figure>
        <figure>
            <img src="asset/recipes.jpg" alt="">
            <figcaption>Ici ingrédient</figcaption>
            <div class="wrap-button">
                <p>Prix</p>
                <button><i class="fas fa-cart-plus"></i></button>
            </div>
        </figure>
        <figure>
            <img src="asset/recipes.jpg" alt="">
            <figcaption>Ici ingrédient</figcaption>
            <div class="wrap-button">
                <p>Prix</p>
                <button><i class="fas fa-cart-plus"></i></button>
            </div>
        </figure>
        <figure>
            <img src="asset/recipes.jpg" alt="">
            <figcaption>Ici ingrédient</figcaption>
            <div class="wrap-button">
                <p>Prix</p>
                <button><i class="fas fa-cart-plus"></i></button>
            </div>
        </figure>
    </div>
</article> 