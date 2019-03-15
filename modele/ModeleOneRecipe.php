<?php
class ModeleOneRecipe extends ClassConnexion{

    public function ingredientsList($id){
        $array = [];
        $req = parent::$bdd->query("SELECT ingredients.id, ingredients.name, qtx,unite FROM `rec_has_ing`JOIN ingredients ON rec_has_ing.id_ingredient=ingredients.id JOIN unit ON ingredients.id_unit=unit.id WHERE id_recipe=$id "); 
        while ($donnees = $req->fetch()) {
            $ingredient = new ClassUnIngredient();
            $ingredient->setId($donnees["id"]);
            $ingredient->setName($donnees["name"]);
            $ingredient->setQtx($donnees["qtx"]);
            $ingredient->setUnite($donnees["unite"]);
            array_push($array,$ingredient);
        }
        return $array;
    }
    public function recipe(){

    }
}