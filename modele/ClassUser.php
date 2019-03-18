<?php
/**
 * Description of ClassSignInUp
 *
 * @author thibault
 */
class ClassUser{
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
}
