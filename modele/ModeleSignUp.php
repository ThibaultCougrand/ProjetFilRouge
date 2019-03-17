<?php
/**
 * Description of ModeleSignUp
 *
 * @author thibault
 */
class ModeleSignUp extends ClassConnexion {

    public function verifLogin() {
        try {
            $req = parent::$bdd->prepare('SELECT `id` FROM `utilisateur` WHERE `email`=:email AND `password`=:password');
            $result = $req->execute(array(
                'email' => $this->email,
                'password' => $this->password
            ));
            while ($donnee = $req->fetch()) {
                $this->id = $donnee['id'];
                $message = "Vous etes connecter";
                echo $id;
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

}
