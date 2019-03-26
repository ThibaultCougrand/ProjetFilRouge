<?php
/**
 * Description of ModeleSignUp
 *
 * @author thibault
 */
class ModeleSignIn extends ClassConnexion {

    public function connexion($user) {
        try {
            $user->setId(0);
            $email = $user->email();
            $password = $user->password();
            $req = parent::$bdd->prepare('SELECT `id`, `name`, `first_name`, `birthdate`, `sexe` FROM `users` WHERE `email`=:email AND `password`=:password');
            $req->bindParam(':email', $email);
            $req->bindParam(':password', $password);
            $req->execute();
            while ($result = $req->fetch()) {
                $user->setId($result['id']);
                $user->setName($result['name']);
                $user->setFirstName($result['first_name']);
                $user->setBirthdate($result['birthdate']);
                $user->setSex($result['sexe']);
            }
            
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

}
