<?php
namespace Controllers;

use Core\HttpResponse;

class SerieController extends BaseController {
    public function index() {
        // On recherche views/pages/series.index.php
        $this->render(['titre' => 'Series List']); 
    }

    public function articles() {
       
        $this->render(['titre' => 'Series Articles']);
    }

    public function details() {
      
        $this->render(['titre' => 'Series Details']);
    }
}