<?php namespace Controllers;
    use Repositories\EpisodeRepository;

class EpisodesController extends BaseController
{

    public function index(){
        $episodeRepository = new EpisodeRepository();
        $episodes = $episodeRepository->getAll();
    }

    public function articles(){
        $id = (int)$this->params[0];
        if($id < 1) {
            header('HTTP/1.0 404 Not Found');
            die();
        }
        $episodeRepository = new EpisodeRepository();
        $episodes = $episodeRepository->getOneById($id);
    }
}  

?>