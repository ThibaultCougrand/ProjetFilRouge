<?php
class ModeleIngredients extends ClassConnexion 
{
    public function ingredientsCategory() {
        $array = [];
        $req = parent::$bdd->query("SELECT category.name, category.id FROM `category_ing` JOIN category ON category_ing.id = category.id");
        while($donnee = $req->fetch()){
            $ingredient = new ClassIngredients();
            $ingredient->setId($donnee['id']);
            $ingredient->setName($donnee['name']);
            array_push($array,$ingredient);

        }
        return $array;
    }
}
