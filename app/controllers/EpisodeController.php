<?php
namespace Controllers;

use Core\HttpResponse;

class EpisodeController extends BaseController {
    public function index() {

        $this-> render('episode/index', ['titre' => 'Episodes List']);
    
    
    }
}