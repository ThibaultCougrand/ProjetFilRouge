<?php
class ModeleIngredients extends ClassConnexion
{
    public function categoryOfIngredients()
    {
        $array = [];
        $req = parent::$bdd->query("SELECT category.name, category.id 
        FROM `category_ing` JOIN category ON category_ing.id = category.id");
        while ($donnee = $req->fetch()) {
            $ingredient = new ClassIngredients();
            $ingredient->setId($donnee['id']);
            $ingredient->setName($donnee['name']);
            array_push($array, $ingredient);
        }
        return $array;
    }

    public function ingredientsByCategory($id)
    {
        $array = [];
        $req = parent::$bdd->prepare("SELECT ingredients.id, ingredients.name, ingredients.image, ingredients.qtx_price
         FROM `ingredients` WHERE ingredients.id_category_ing=:id");
         $req -> bindParam(':id', $id);
         $req->execute();
         while($donnee = $req->fetch()) {
            $ingredient = new ClassIngredients();
            $ingredient->setId($donnee['id']);
            $ingredient->setName($donnee['name']);
            $ingredient->setImage($donnee['image']);
            array_push($array, $ingredient);
         }return $array;
    }


    public function allIngredients()
    {
        $array = [];
        $req = parent::$bdd->prepare("SELECT ingredients.*, unite
         FROM `ingredients`
         JOIN unit ON id_unit=unit.id 
         ORDER BY id DESC LIMIT 9 ");
         //$req -> bindParam(':id', $id);
         $req->execute();
         while($donnee = $req->fetch()) {
            $ingredient = new ClassIngredients();
            $ingredient->setId($donnee['id']);
            $ingredient->setName($donnee['name']);
            $ingredient->setImage($donnee['image']);
            $ingredient->setPrix($donnee['price']);
            $ingredient->setQtx_price($donnee['qtx_price']);
            $ingredient->setUnit($donnee['unite']);

            array_push($array, $ingredient);
         }return $array;
    }
}
