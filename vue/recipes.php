<?php if (!isset($recettes)) {
    $recettes = [];
}
?>
<article class="recettes">
    <aside class="filtres-recettes">
        <ul>
            <?php 
            if (count($recettes) > 0) {
                foreach ($recettes as $value) {
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
        <article class="les-recettes">

        </article>
    </div>
</article> 