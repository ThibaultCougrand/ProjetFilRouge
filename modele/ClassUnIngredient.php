<?php
class ClassUnIngredient{
    private $id;
    private $name;
    private $qtx;
    private $price;
    private $unite;
    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function getQtx()
    {
        return $this->qtx;
    }

    
    public function setQtx($qtx)
    {
        $this->qtx = $qtx;

        return $this;
    }

   
    public function getPrice()
    {
        return $this->price;
    }

    
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }
 
    public function getUnite()
    {
        return $this->unite;
    }


    public function setUnite($unite)
    {
        $this->unite = $unite;

        return $this;
    }
}