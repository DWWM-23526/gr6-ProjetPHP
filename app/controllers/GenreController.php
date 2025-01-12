<?php
namespace Controllers;

use Core\HttpResponse;

class SerieController extends BaseController {
    public function index() {

        $this-> render('genre/index', ['nom' => 'Genres List']);
    
    
    }
}