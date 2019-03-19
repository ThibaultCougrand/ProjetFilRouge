<?php

class ClassArticle
{
    private $id;
    private $name;
    private $description;
    private $image;
    private $prix;
    private $qtx_price;
    private $unit;
    private $qtx;

    public function affichePrix(){
        return $this->prix .'€ pour '. $this->qtx_price() .' '. $this->unit();
    }

    public function id()
    {
        return $this->id;
    }


    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of name
     */
    public function name()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of description
     */
    public function description()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of image
     */
    public function image()
    {
        return $this->image;
    }

    /**
     * Set the value of image
     *
     * @return  self
     */
    public function setImage($image)
    {
        if($image == null){
            $image = "asset/ingredients.jpg";
        }
        $this->image = $image;

        return $this;
    }
    //tableau associatif clé => valeur
    public function toArray()
    {   
        return ["id" => $this->id(), "name" => $this->name(), "img" =>  $this->image(), "prix" => $this->prix(), "unit" =>
    $this->unit(), "qtx" => $this->qtx() ];
    }

    /**
     * Get the value of prix
     */ 
    public function prix()
    {
        return $this->prix;
    }

    /**
     * Set the value of prix
     *
     * @return  self
     */ 
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get the value of qtx_price
     */ 
    public function qtx_price()
    {
        return $this->qtx_price;
    }

    /**
     * Set the value of qtx_price
     *
     * @return  self
     */ 
    public function setQtx_price($qtx_price)
    {
        $this->qtx_price = $qtx_price;

        return $this;
    }

    /**
     * Get the value of unit
     */ 
    public function unit()
    {
        return $this->unit;
    }

    /**
     * Set the value of unit
     *
     * @return  self
     */ 
    public function setUnit($unit)
    {
        $this->unit = $unit;

        return $this;
    }

    /**
     * Get the value of qtx
     */ 
    public function qtx()
    {
        return $this->qtx;
    }

    /**
     * Set the value of qtx
     *
     * @return  self
     */ 
    public function setQtx($qtx)
    {
        $this->qtx = $qtx;

        return $this;
    }
}
