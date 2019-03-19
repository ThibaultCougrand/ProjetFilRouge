<div class="contener-flex-sign-in">
    <div><h3>Connexion</h3></div>
    <form class="connection" id="connection" action="index.php?loc=signin" method="POST" autocomplete="off">
        <label for="emailCo">email:</label>
        <input type="email" id="emailCo" name="emailCo">
        <label for="passwordCo">mot de passe:</label>
        <input type="password" id="passwordCo" name="passwordCo">
        <br><input type="submit" value="Se connecter" form="connection">
    </form>
    <div class="divider"></div>
    <div><h3>Inscription</h3></div>
    <form class="inscription" id="inscription" action="index.php?loc=signup" method="POST" autocomplete="off">
        <label for="emailIns">email:</label>
        <input type="email" id="emailIns" name="emailIns">
        <label for="passwordIns">mot de passe:</label>
        <input type="password" id="passwordIns" name="passwordIns">
        <br><input type="button" id="buttonIns" onclick="afficheFormulaire();" value="S'inscrire">
    </form>
</div>

<!-- 
<label for="nameIns">nom:</label>
<input type="text" id="nameIns" name="nameIns">
<label for="firstNameIns">prenom:</label>
<input type="text" id="firstNameIns" name="firstNameIns">
<label for="verifPasswordIns">verifier votre mot de passe:</label>
<input type="password" id="verifPasswordIns" name="verifPasswordIns">
<br><input type="submit" value="S'inscrire" form="inscription">
-->