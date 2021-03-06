<?php
class ModeleOneRecipe extends ClassConnexion
{

    public function ingredientsList($id)
    {
        $array = [];
        $req = parent::$bdd->prepare("SELECT ingredients.id, ingredients.name, qtx,unite, ingredients.image,ROUND(price/qtx_price*qtx,2) AS price_ing 
         FROM `rec_has_ing`
        JOIN ingredients ON rec_has_ing.id_ingredient=ingredients.id 
        JOIN unit ON ingredients.id_unit=unit.id 
        WHERE id_recipe=:id ");
        $req->bindParam(':id', $id);
        $req->execute();
        while ($donnees = $req->fetch()) {
            $ingredient = new ClassUnIngredient();
            $ingredient->setId($donnees["id"]);
            $ingredient->setName($donnees["name"]);
            $ingredient->setQtx($donnees["qtx"]);
            $ingredient->setUnite($donnees["unite"]);
            $ingredient->setImage($donnees["image"]);
            $ingredient->setPrice($donnees["price_ing"]);
            array_push($array, $ingredient);
        }
        return $array;
    }
    public function recipe($id)
    {
        $recette = new ClassRecette();
        $req = parent::$bdd->prepare("SELECT id,name,description,image,time FROM `recipe` WHERE id=:id");
        $req->bindParam(':id', $id);
        $req->execute();
        if ($donnees = $req->fetch()) {
            $recette->setId($donnees["id"]);
            $recette->setName($donnees["name"]);
            $recette->setDescription($donnees["description"]);
            $recette->setImage($donnees["image"]);
        }
        return $recette;
    }
    public function totalPrice($id){
        $price;
        $req = parent::$bdd->prepare("SELECT
        SUM(ROUND(price/qtx_price*qtx,2)) AS totalPrice
    FROM
        `rec_has_ing`
    JOIN ingredients ON rec_has_ing.id_ingredient = ingredients.id
    JOIN unit ON ingredients.id_unit = unit.id
    WHERE
        id_recipe = 2");
        $req->bindParam(':id', $id);
        $req->execute();
        if($donnee=$req->fetch()){
            $price=$donnee["totalPrice"];
        }
        return $price;
    }
}
