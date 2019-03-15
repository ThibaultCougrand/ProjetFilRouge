<?php if (!isset($categoryRecettes)) {
    $categoryRecettes = [];
}
?>
<article class="recettes">
    <aside class="filtres-recettes">
        <ul>
            <?php 
            if (count($categoryRecettes) > 0) {
                foreach ($categoryRecettes as $value) {
                    echo '<li class="un-filtre" data-id="' . $value->id() . '">' . $value->name() . '</li>';
                }
            } else {
                echo ("error");
            }
            ?>
        </ul>
    </aside>
    <div class="liste-recette">
        <h1>Nos Recettes</h1>
        <article id="les-recettes">
            <?php
                foreach ($recettes as  $value) {
                    ?>
                    <figure>
                    <div class="image-recette" style="background-image: url(&quot;<?=$value->image();?>&quot;);">
                </div>
                <figcaption><?=$value->name()?></figcaption>
                </figure>
                
                <?php
                }
            ?>
        </article>
    </div>
</article> 