<nav>
    <ul>
        <li><a href="index.php?loc=home">Accueil</li></a>
        <li><a href="index.php?loc=recipes">Nos recettes</li></a>
        <li><a href="index.php?loc=produits">Produits</li></a>
        <?php
        if ($_SESSION['id'] === '') {
            echo '<li><a href="index.php?loc=sign-in-up">Connexion</li></a>';
        } else {
            echo '<li><a href="index.php?loc=cart">Espace client</li></a>';
        }?>
        <li><a href = "index.php?loc=cart">Panier</li></a>
        </ul>
        </nav> 