<?php
$modele = new ModeleSignUp();
$user = new ClassUser();
$verif = 0;

$data['id'] = 1;

if ($email === $verifEmail) {
    $user->setEmail($email);
    $data['email'] = "";
    $verif++;
} else {
    $data['email'] = "Email incorrect.";
}
if ($password === $verifPassword) {
    $user->setPassword($password);
    $data['password'] = "";
    $verif++;
} else {
    $data['password'] = "Mot de passe incorrect.";
}
if (!empty($name)) {
    $user->setName($name);
    $data['name'] = "";
    $verif++;
} else {
    $data['name'] = "Veuillez saisir un nom";
}
if (!empty($firstName)) {
    $user->setFirstName($firstName);
    $data['firstName'] = "";
    $verif++;
} else {
    $data['firstName'] = "Veuillez saisir un prenom";
}
if (!empty($age)) {
    $user->setAge($age);
    $data['age'] = "";
    $verif++;
} else {
    $data['age'] = "Veuillez saisir un age";
}
if (!empty($sex)) {
    $user->setSex($sex);
    $data['sex'] = "";
    $verif++;
} else {
    $data['sex'] = "Veuillez choisir un sexe";
}
if ($verif === 6) {
    $modele->inscription($user);
    $verif=0;
}
