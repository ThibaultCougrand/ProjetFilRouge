<?php 
class Recette{
    private $id;
    private $name;

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
}