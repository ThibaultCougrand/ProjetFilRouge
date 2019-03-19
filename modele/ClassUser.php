<?php

/**
 * Description of ClassSignInUp
 *
 * @author thibault
 */
class ClassUser {

    private $id, $email, $password, $name, $firstName, $age, $sex;

    function id() {
        return $this->id;
    }

    function setId($id) {
        return $this->id = $id;
    }

    function email() {
        return $this->email;
    }

    function setEmail($email) {
        return $this->email = $email;
    }

    function password() {
        return $this->password;
    }

    function setPassword($password) {
        return $this->password = $password;
    }

    function name() {
        return $this->name;
    }

    function setName($name) {
        $this->name = $name;
    }

    function firstName() {
        return $this->firstName;
    }

    function setFirstName($firstName) {
        $this->firstName = $firstName;
    }
    
    function age() {
        return $this->age;
    }
    
    function setAge($age) {
        $this->age = $age;
    }
    
    function sex() {
        return $this->sex;
    }
    
    function setSex($sex) {
        $this->sex = $sex;
    }
}
