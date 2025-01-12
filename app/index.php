<?php

function autoload($className)
{
    $classFilePath = str_replace('\\', '/', $className) . ".php";
    if (file_exists($classFilePath)) {
        require_once $classFilePath;
    }
}

spl_autoload_register('autoload');


$router = new Controllers\Router();
$router->start();