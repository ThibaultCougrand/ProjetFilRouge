<?php
$modele = new ModeleSignUp();
$name = filter_input(INPUT_POST, 'nameIns');
$firstName = filter_input(INPUT_POST, 'firstNameIns');
$email = filter_input(INPUT_POST, 'emailIns');
$password = filter_input(INPUT_POST, 'passwordIns');

$user = new ClassUser();
$user->setName($name);
$user->setFirstName($firstName);
$user->setEmail($email);
$user->setPassword($password);
//if ($modele->verifEmailExist($user)) {
$modele->inscription($user);
//}