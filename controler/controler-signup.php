<?php
$modele = new ModeleSignUp();
$name = filter_input(INPUT_POST, 'nameIns');
$firstName = filter_input(INPUT_POST, 'firstNameIns');
$email = filter_input(INPUT_POST, 'emailIns');
$password = filter_input(INPUT_POST, 'passwordIns');
$age = filter_input(INPUT_POST, 'ageIns');
$sex = filter_input(INPUT_POST, 'sexIns');

$user = new ClassUser();

$user->setName($name);
$user->setFirstName($firstName);
$user->setEmail($email);
$user->setPassword($password);
$user->setAge($age);
$user->setSex($sex);
//if ($modele->verifEmailExist($user)) {
$modele->inscription($user);
//}