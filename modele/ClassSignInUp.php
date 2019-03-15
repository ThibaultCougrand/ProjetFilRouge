<?php
/**
 * Description of ClassSignInUp
 *
 * @author thibault
 */
class ClassSignInUp {
    private $id, $email, $password;

    function id()
    {
        return $this->id;
    }
    function setId($id)
    {
        return $this->id = $id;
    }
    function email()
    {
        return $this->email;
    }
    function setEmail($email)
    {
        return $this->email = $email;
    }
    function password()
    {
        return $this->password;
    }
    function setPassword($password)
    {
        return $this->password = $password;
    }
    public function verifLogin(){
        $message = "err";
        try {
            $req = parent::$bdd->prepare('SELECT `id` FROM `utilisateur` WHERE `email`=:email AND `password`=:password');
            $result = $req->execute(array(
                'email' => $this->email,
                'password' => $this->password
            ));
            while($donnee = $req->fetch()) {
                $id=$donnee['id'];
                $message = "Vous etes connecter";
                echo $id;
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        echo $message;
    }
//    public function inscription() {
//        $message = "raté";
//        try {
//            $req = parent::$bdd->prepare('INSERT INTO `utilisateur`( `login`, `password`) VALUES (:login,:password)');
//            $result = $req->execute(array(
//                'login' => $this->login,
//                'password' => $this->hash($this->password)
//            ));  
//            if ($result == true) {
//                $message = "Succes";
//            }
//        } catch (PDOException $e) {
//            echo $e->getMessage();
//        }
//        echo '<h1>' . $message . '</h1> ';
//    }
}
