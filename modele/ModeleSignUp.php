<?php
/**
 * Description of ModeleSignUp
 *
 * @author thibault
 */
class ModeleSignUp extends ClassConnexion {

    public static function verifLogin($user) {
        try {
            $req = parent::$bdd->prepare('SELECT `id` FROM `utilisateur` WHERE `email`=:email AND `password`=:password');
            $result = $req->execute(array(
                'email' => $user->email,
                'password' => $user->password
            ));
            while ($donnee = $result->fetch()) {
                $user->id = $donnee['id'];
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

}
