<?php
$login = filter_input(INPUT_POST, 'emailCo');
$password = filter_input(INPUT_POST, 'passwordCo');

$user = new ClassUser();
$user->setEmail($login);
$user->setPassword($password);
if ($user->id() > 0) {
    //stoquer id dans la session
} else {
    echo "erreur";
}