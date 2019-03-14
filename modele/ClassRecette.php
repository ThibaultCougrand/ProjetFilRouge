<?php 
class Recette{
    private $id;
    private $name;
    private $description;
    private $image;

    function id()
    {
        return $this->id;
    }
    function setId($id)
    {
        return $this->id = $id;
    }
    function name()
    {
        return $this->name;
    }
    function setName($name)
    {
        return $this->name = $name;
    }
    function description()
    {
        return $this->description();
    }
    function setDescription($description)
    {
        return $this->description = $description;
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