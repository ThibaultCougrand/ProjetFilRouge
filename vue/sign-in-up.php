<div class="contener-flex-sign-in">
    <div><h3>Connexion</h3></div>
    <form class="connection" action="index.php?loc=signup" method="POST">
        <label for="emailCo">email:</label>
        <input type="email" id="emailCo" name="emailCo">
        <label for="passwordCo">mot de passe:</label>
        <input type="password" id="passwordCo" name="passwordCo">
        <br><button type="submit">Se connecter</button>
    </form>
    <div class="divider"></div>
    <div><h3>Inscription</h3></div>
    <form class="inscription" action="index.php?loc=signin" method="POST">
        <label for="nameIns">nom:</label>
        <input type="text" id="nameIns" name="nameIns">
        <label for="firstNameIns">prenom:</label>
        <input type="text" id="firstNameIns" name="firstNameIns">
        <label for="emailIns">email:</label>
        <input type="email" id="emailIns" name="emailIns">
        <label for="passwordIns">mot de passe:</label>
        <input type="password" id="passwordIns" name="passwordIns">
        <label for="verifPasswordIns">verifier votre mot de passe:</label>
        <input type="password" id="verifPasswordIns" name="verifPasswordIns">
        <br><button type="submit">S'inscrire</button>
    </form>
</div>
