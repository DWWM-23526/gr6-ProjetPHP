<?php namespace Controllers;
      use Core\HttpResponse;

      class BaseController
      {
          public $actionName;
          protected $params;
      
          public function __construct($routeParts)
          {
              $this->actionName = array_shift($routeParts) ?? 'index';
              $actionNotExists = !method_exists(get_called_class(), $this->actionName);
              HttpResponse::SendNotFound($actionNotExists);  
              $this->params = $routeParts; 
          }
      
          protected function render($attributes = [], $viewPath = null)
          {
              extract($attributes);
              if (!isset($viewPath)) {
                  $controllerName = str_replace("Controller", "", get_called_class());
                  $controllerName = lcfirst(str_replace("s\\", "", $controllerName));
                  $viewPath = "views/pages/$controllerName.$this->actionName.php";
              }
              ob_start();
              require_once $viewPath;
              $content = ob_get_clean();
              HttpResponse::SendOK($content);
          }
      
          protected function loadEntity($entityClass, $data)
          {
              return new $entityClass($data);//Necessaire car nos methodes Base sont différentes entre elles
          }
      }