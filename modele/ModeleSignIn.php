<?php
/**
 * Description of ModeleSignInUp
 *
 * @author thibault
 */
class ModeleSignInUp extends ClassConnexion {

    public function inscription() {
        $message = "raté";
        try {
            $req = parent::$bdd->prepare('INSERT INTO `utilisateur`( `login`, `password`) VALUES (:login,:password)');
            $result = $req->execute(array(
                'login' => $this->login,
                'password' => $this->hash($this->password)
            ));
            if ($result == true) {
                $message = "Succes";
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        echo '<h1>' . $message . '</h1> ';
    }

}
