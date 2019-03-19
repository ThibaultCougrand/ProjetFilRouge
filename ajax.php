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

        case 'produit':
        $id = filter_input(INPUT_POST, 'id');
        //permet de recuperer la valeur de id envoyé grâce à la requête ajax
        if ($id) {
            $modele = new ModeleArticle();
            $array = $modele->articlesByCategory($id);
            foreach ($array as $pro) {
                array_push($data, $pro->toArray());
            }
        }else {
            $data['erreur'] = "pas d'id romain ajax.php";    
        }
        break;
    default:
        $data['erreur'] =  'cas inconnue';
        break;
}
//j'encode mon tableau en json php => JS
echo json_encode($data);
