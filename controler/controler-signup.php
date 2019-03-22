<?php
$modele = new ModeleSignUp();
$user = new ClassUser();

if ($email === $verifEmail) {
    $user->setEmail($email);
    $data['email'] = "";
} else {
    $data['email'] = "Email incorrect.";
}
if ($password === $verifPassword) {
    $user->setPassword($password);
    $data['password'] = "";
} else {
    $data['password'] = "Mot de passe incorrect.";
}
if (!empty($name)) {
    $user->setName($name);
    $data['name'] = "";
} else {
    $data['name'] = "Veuillez saisir un nom";
}
if (!empty($firstName)) {
    $user->setFirstName($firstName);
    $data['firstName'] = "";
} else {
    $data['firstName'] = "Veuillez saisir un prenom";
}
if (!empty($age)) {
    $user->setAge($age);
    $data['age'] = "";
} else {
    $data['age'] = "Veuillez saisir un age";
}
if (!empty($sex)) {
    $user->setSex($sex);
    $data['sex'] = "";
} else {
    $data['sex'] = "Veuillez choisir un sexe";
}
