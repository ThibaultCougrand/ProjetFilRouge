<div class="contener-flex-sign-in">
    <div><h3>Connexion</h3></div>
    <form class="connection" id="connection" action="index.php?loc=signin" method="POST" autocomplete="off">
        <label>email:</label>
        <input type="email" name="emailCo">
        <label>mot de passe:</label>
        <input type="password" name="passwordCo">
        <br><input type="submit" value="Se connecter" form="connection">
    </form>
    <div class="divider"></div>
    <div><h3>Inscription</h3></div>
    <form class="inscription" id="inscription" action="index.php?loc=signup" method="POST" autocomplete="off">
        <label id="labelEmailIns">email:</label>
        <input type="email" id="emailIns" name="emailIns">
        <p id="err-email" class="mesErr"></p>
        <label id="labelPasswordIns">mot de passe:</label>
        <input type="password" id="passwordIns" name="passwordIns">
        <p id="err-password" class="mesErr"></p>
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