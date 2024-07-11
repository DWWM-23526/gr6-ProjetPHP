<?php
namespace Controllers;

use Core\HttpResponse;

class BaseController
{
    protected $params;
    public $actionName;

    public function __construct(array $routeParts)
    {
        $this->params = $routeParts;
        $this->actionName = $this->getActionName();
    }

    
}