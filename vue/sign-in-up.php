<div class="contener-flex-sign-in">
    <div><h3>Connexion</h3></div>
    <form class="connection" action="index.php?loc=signinup" method="POST">
        <label for="email">email:</label>
        <input type="email" id="email" name="emailCo">
        <label for="password">mot de passe:</label>
        <input type="password" id="password" name="passwordCo">
        <br><button type="submit">Se connecter</button>
    </form>
    <div class="divider"></div>
    <div><h3>Inscription</h3></div>
    <form class="inscription" action="controler/controler-signinup.php" method="POST">
        <label for="name">nom:</label>
        <input type="text">
        <label>prenom:</label>
        <input type="text">
        <label>email:</label>
        <input type="email">
        <label>mot de passe:</label>
        <input type="password">
        <label>verifier votre mot de passe:</label>
        <input type="password">
        <br><button type="submit">S'inscrire</button>
    </form>
</div>
