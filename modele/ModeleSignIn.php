<?php
/**
 * Description of ModeleSignUp
 *
 * @author thibault
 */
class ModeleSignIn extends ClassConnexion {

    public function verifLogin($user) {
        try {
            $req = parent::$bdd->prepare('SELECT `id` FROM `utilisateur` WHERE `email`=:email AND `password`=:password');
            $result = $req->execute(array(
                'email' => $user->email(),
                'password' => $user->password()
            ));
            while ($donnee = $result->fetch()) {
                $user->setId($donnee['id']);
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

}
