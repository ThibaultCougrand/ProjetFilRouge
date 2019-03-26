<?php
class ModeleArticle extends ClassConnexion
{
    public function articlesByCategory($id)
    {
        $array = [];
        $req = parent::$bdd->prepare("SELECT ingredients.name, article.qtx, article.prix,
         unit.unite, article.id, article.image 
        FROM `category` 
        JOIN ingredients ON category.id = ingredients.id_category_ing 
        JOIN article ON ingredients.id = article.id_ing
        JOIN unit ON article.id_unite = unit.id
        WHERE category.id = :id");
        $req->bindParam(':id', $id);
        $req->execute();
        while ($donnee = $req->fetch()) {
            $articles = new ClassArticle();
            $articles->setId($donnee['id']);
            $articles->setName($donnee['name']);
            $articles->setQtx($donnee['qtx']);
            $articles->setPrix($donnee['prix']);
            $articles->setUnit($donnee['unite']);
            $articles->setImage($donnee['image']);

            array_push($array, $articles);
        }
        return $array;
    }

    public function readArticleById($id)
    {
       // $array = [];
        $req = parent::$bdd->prepare("SELECT article.id, ingredients.name, article.qtx, article.prix, 
        article.image, unit.unite 
        FROM `article` 
        JOIN ingredients ON ingredients.id=article.id_ing
        JOIN unit ON article.id_unite = unit.id
         WHERE article.id = :id ");
        $req->bindParam(':id', $id);
        $req->execute();
        $articles = false;
        while ($donnee = $req->fetch()) {
            $articles = new ClassArticle();
            $articles->setId($donnee['id']);
            $articles->setName($donnee['name']);
            $articles->setQtx($donnee['qtx']);
            $articles->setPrix($donnee['prix']);
            $articles->setUnit($donnee['unite']);
            $articles->setImage($donnee['image']);

            //array_push($array, $articles);
        }
        return $articles;
    }

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


    public function articlesAll()
    {
        $array = [];
        $req = parent::$bdd->prepare("SELECT ingredients.name, article.qtx, article.prix, unit.unite, article.id, article.image 
        FROM `category` 
        JOIN ingredients ON category.id = ingredients.id_category_ing 
        JOIN article ON ingredients.id = article.id_ing
        JOIN unit ON article.id_unite = unit.id
        ORDER BY id DESC LIMIT 9");
        $req->execute();
        while ($donnee = $req->fetch()) {
            $articles = new ClassArticle();
            $articles->setId($donnee['id']);
            $articles->setName($donnee['name']);
            $articles->setQtx($donnee['qtx']);
            $articles->setPrix($donnee['prix']);
            $articles->setUnit($donnee['unite']);
            $articles->setImage($donnee['image']);

            array_push($array, $articles);
        }
        return $array;
    }
}
