<?php
/**
 * Description of ModeleSignInUp
 *
 * @author thibault
 */
class ModeleSignInUp extends ClassConnexion {

    public function inscription($user) {
        try {
            $req = parent::$bdd->prepare('INSERT INTO `utilisateur`( `email`, `password`) VALUES (:login,:password)');
            $result = $req->execute(array(
                'email' => $user->email,
                'password' => $user->password
            ));
            if ($result == true) {
                $message = "Succes";
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
