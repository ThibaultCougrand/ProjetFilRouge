<?php

$modele = new ModeleSignIn();
$user = new ClassUser();

$error = true;
$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');

$user->setEmail($email);
$user->setPassword($password);

$modele->connexion($user);

if ($user->id() > 0) {
    $_SESSION['id'] = $user->id();
    $_SESSION['name'] = $user->name();
    $_SESSION['firstName'] = $user->firstName();
    $_SESSION['birthdate'] = $user->birthdate();
    $_SESSION['sex'] = $user->sex();
    $error = false;
}