<?php namespace Controllers;

class Router 
{

    private $controllerInstance;
    
    public function __construct()
    {
        $route = filter_var(trim($_SERVER["REQUEST_URI"], '/'),FILTER_SANITIZE_URL);
        $routeParts = explode('/', $route); // routeParts[0] = part1 etc..
        $controllerName = ucfirst(array_shift($routeParts)); //ucfirst - first letter to Capital and array_shift assigns first to controllerName
        if(empty($controllerName)){
            $controllerName = "Home";
        }
        $controllerClassName = "Controllers\\".$controllerName."Controller";
        $controllerFilePath = lcfirst($controllerClassName).".php";
        if(!file_exists($controllerFilePath)){
            header('HTTP/1.0 404 Not Found');
            die();
        }
        // include_once $controllerFilePath;n’est plus nécessaire, nous avons créé unautoload,
        $this->controllerInstance = new $controllerClassName($routeParts);
        // $controllerInstance->{$controllerInstance->actionName}();
    }   
    public function start(){
        $action = $this->controllerInstance->actionName;
        $this->controllerInstance->{$action}();
    }
}
