<?php
$modele = new ModeleSignUp();
$user = new ClassUser();
$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');
$verifEmail = filter_input(INPUT_POST, 'verifEmail');
$verifPassword = filter_input(INPUT_POST, 'verifPassword');
$name = filter_input(INPUT_POST, 'name');
$firstName = filter_input(INPUT_POST, 'firstName');
$age = filter_input(INPUT_POST, 'age');
$sex = filter_input(INPUT_POST, 'sex');
var_dump($email);

$data = [];

if ($email === $verifEmail) {
    $user->setEmail($email);
    $data['email'] = "";
} else {
    $data['email'] = "L'email de verification ne corespond pas avec l'email saisi.";
}
if ($password === $verifPassword) {
    $user->setPassword($password);
    $data['password'] = "";
} else {
    $data['password'] = "Le mot de passe de verification ne corespond pas avec le mot de passe saisi.";
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

echo json_encode($data);
//$modele->inscription($user);
