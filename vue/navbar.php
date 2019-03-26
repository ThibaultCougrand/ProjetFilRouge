<nav>
    <ul>
<<<<<<< HEAD
        <li><a href="index.php?loc=home">Accueil</li></a>
        <li><a href="index.php?loc=recipes">Nos recettes</li></a>
        <li><a href="index.php?loc=produits">Produits</li></a>
        <?php
        if (!isset($_SESSION['id'])) {
            echo '<li><a href="index.php?loc=sign-in-up">Connexion</li></a>';
        } else {
            echo '<li><a href="index.php?loc=account">Espace client</li></a>';
        }
        ?>
        <li><a href = "index.php?loc=cart">Panier</li></a>
=======
        <li><a href="index.php?loc=home">Accueil</a></li>
        <li><a href="index.php?loc=recipes">Nos recettes</a></li>
        <li><a href="index.php?loc=produits">Produits</a></li>
        <li><a href="index.php?loc=sign-in-up">Connexion</a></li>
        <li><a href="index.php?loc=cart">Panier</a></li>
>>>>>>> Gestion
    </ul>
</nav> 
<?php
//var_dump($_SESSION);
?>