<?php

include_once 'controler/Autoloader.php';
Autoloader::register();

//recupération de la variable "uc" passé depuis le JS.
$uc = filter_input(INPUT_POST, 'uc');

//création d'un tableau data qui sera retourné au JS.
$data = [];

//Permet de passer des informations dans le tableau data en fonction de l'"uc" qui à été requetté.
switch ($uc) {
    
    /*REQUETTE PAGE RECETTE*/
    case 'recipe':
        $id = filter_input(INPUT_POST, 'id');
        if ($id) {
            $modele = new ModeleRecette();
            $array = $modele->uneRecette($id);
            foreach ($array as $rec) {
                array_push($data, $rec->toArray());
            }
        } else {
            $data['erreur'] = "pas d'id";
        }
        break;
        
    /*REQUETTE DE LA PAGE INSCRIPTION*/
    case 'signup':
        $email = filter_input(INPUT_POST, 'email');
        $modele = new ModeleSignUp();
        $verif = $modele->verifEmailExist($email);
        $data['verif'] = (boolean) $verif;
        break;

    /*REQUETTE DE LA PAGE PRODUIT*/
    case 'produit':
        $id = filter_input(INPUT_POST, 'id');
        //permet de recuperer la valeur de id envoyé grâce à la requête ajax
        if ($id) {
            $modele = new ModeleArticle();
            $array = $modele->articlesByCategory($id);
            foreach ($array as $pro) {
                array_push($data, $pro->toArray());
            }
        } else {
            $data['erreur'] = "pas d'id romain ajax.php";
        }
        break;
        
    /*SI UC INVALIDE*/    
    default:
        $data['erreur'] = 'cas inconnue';
        break;
}

//j'encode le tableau data en json pour transmettre les informations du "php => JS"
echo json_encode($data);
