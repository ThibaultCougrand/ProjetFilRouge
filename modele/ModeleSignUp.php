<?php

/**
 * Description of ModeleSignInUp
 *
 * @author thibault
 */
class ModeleSignUp extends ClassConnexion {

    public function verifEmailExist(String $email) {
        $verif = false;
        $id = 0;
        try {
            $req = parent::$bdd->prepare('SELECT `id` FROM `users` WHERE `email`=:email');
            $req->bindParam(':email', $email);
            $req->execute();
            while ($result = $req->fetch()) {
                $id = (int) $result['id'];
            }
            if ($id > 0) {
                $verif = false;
            } else {
                $verif = true;
            }
            return $verif;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function inscription(ClassUser $user) {
        try {
            $req = parent::$bdd->prepare('INSERT INTO `users`( `email`, `password`, `name`, `first_name`) VALUES (:email,:password,:name,:first_name)');
            $result = $req->execute(array(
                'email' => $user->email(),
                'password' => $user->password(),
                'name' => $user->name(),
                'first_name' => $user->firstName()
            ));
            if ($result == true) {
                echo "Succes";
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

}
