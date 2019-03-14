<?php
class ModeleRecette extends ClassConnexion
{
    public function recipeCategory()
    {
        $array = [];
        $req = parent::$bdd->query("SELECT category.name, category.id FROM `category_recipe` JOIN category ON category_recipe.id = category.id "); 
        while ($donnees = $req->fetch()) {
            $recette = new Recette();
            $recette->setId($donnees["id"]);
            $recette->setName($donnees["name"]);
            array_push($array,$recette);
        }
        return $array;
    }
}

