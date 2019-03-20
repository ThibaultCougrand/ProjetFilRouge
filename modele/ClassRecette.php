<?php 
class ClassRecette
{
    private $id;
    private $name;
    private $description;
    private $image;
    private $time;
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
        return $this->description;
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

    public function time()
    {
        return $this->time;
    }
    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }
    public function toArray()
    {
        return ["id" => $this->id(), "name" => $this->name(), "img" =>  $this->image()];
    }
}