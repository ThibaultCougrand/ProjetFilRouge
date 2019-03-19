<?php
class ClassUnIngredient{
    private $id;
    private $name;
    private $qtx;
    private $price;
    private $unite;
    private $image;
    public function id()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function name()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function qtx()
    {
        return $this->qtx;
    }

    
    public function setQtx($qtx)
    {
        $this->qtx = $qtx;

        return $this;
    }

   
    public function price()
    {
        return $this->price;
    }

    
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }
 
    public function unite()
    {
        return $this->unite;
    }


    public function setUnite($unite)
    {
        $this->unite = $unite;

        return $this;
    }
    public function image()
    {
        return $this->image;
    }
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }
}