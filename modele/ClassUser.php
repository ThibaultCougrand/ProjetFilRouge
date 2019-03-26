<?php

/**
 * Description of ClassSignInUp
 *
 * @author thibault
 */
class ClassUser {

    private $id, $email, $password, $name, $firstName, $birthdate, $sex;

    function id() {
        return $this->id;
    }

    function setId($id) {
        $this->id = $id;
    }

    function email() {
        return $this->email;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function password() {
        return $this->password;
    }

    function setPassword($password) {
        $this->password = $password;
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
    
    function birthdate() {
        return $this->birthdate;
    }
    
    function setBirthdate($age) {
        $this->birthdate = $age;
    }
    
    function sex() {
        return $this->sex;
    }
    
    function setSex($sex) {
        $this->sex = $sex;
    }
}
