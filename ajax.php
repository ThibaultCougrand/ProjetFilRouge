<?php
include_once 'controler/Autoloader.php';
Autoloader::register();
$uc = filter_input(INPUT_POST, 'uc');

$data = [];

switch ($uc) {
    case 'recipe':
        $id = filter_input(INPUT_POST, 'id');

        if ($id) {
            $modele = new ModeleRecette();
            $array = $modele->uneRecette($id);
            foreach ($array as $rec) {
                array_push($data, $rec->toArray());
            }
            
        } else {
            $data['erreur'] =  "pas d'id";
        }
        break;
    case 'signup':
        $email = filter_input(INPUT_POST, 'email');
        $modele = new ModeleSignUp();
        $verif = $modele->verifEmailExist($email);
        $data['verif'] = (boolean)$verif;
        break;
    default:
        $data['erreur'] =  'cas inconnue';
        break;
}


echo json_encode($data);