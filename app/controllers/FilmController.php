<?php
namespace Controllers;

use Core\HttpResponse;

class FilmController extends BaseController {
    public function index() {
       
        $this->render(['titre' => 'Films List']); 
    }

    public function articles() {
       
        $this->render(['titre' => 'Films Articles']);
    }

    public function details() {
      
        $this->render(['titre' => 'Films Details']);
    }
}