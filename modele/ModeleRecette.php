<?php
class ModeleRecette extends ClassConnexion
{
    public function recipeCategory()
    {
        $array = [];
        $req = parent::$bdd->query("SELECT category.name, category.id FROM `category_recipe` JOIN category ON category_recipe.id = category.id "); 
        while ($donnees = $req->fetch()) {
            $recette = new ClassRecette();
            $recette->setId($donnees["id"]);
            $recette->setName($donnees["name"]);
            array_push($array,$recette);
        }
        return $array;
    }

    public function uneRecette($id){
        $array = [];
        $req = parent::$bdd->query("SELECT recipe.name,recipe.image, recipe.id FROM `recipe` JOIN rec_has_category ON rec_has_category.id_recipe=recipe.id WHERE rec_has_category.id_category=$id "); 
        while ($donnees = $req->fetch()) {
            $recette = new ClassRecette();
            $recette->setId($donnees['id']);
            $recette->setName($donnees["name"]);
            $recette->setImage($donnees["image"]);
            array_push($array,$recette);
        }
        return $array;
    }
}

