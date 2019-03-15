<?php
class Autoloader
{
    static function autoload($className)
    {
        include "modele/" . $className . ".php";
    }
    static function register()
    {

        spl_autoload_register(array(__CLASS__, 'autoload'));
    }
}
