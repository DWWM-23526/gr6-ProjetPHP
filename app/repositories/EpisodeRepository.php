<?php namespace Repositories;
    use PDO;
    use Entities\Episode;

class EpisodeRepository extends BaseRepository
{
    public function getAll(){
        $queryResponse = $this->preparedQuery("SELECT * FROM episode");
        $episodes = $queryResponse->statement->fetchAll(PDO::FETCH_CLASS,"Entities\Episode");
        return $episodes;
    }
    public function getOneById($id){
        $queryResponse = $this->preparedQuery("SELECT * FROM episode WHERE Id_Episode = ?", [$id]);
        $episode = new Episode($queryResponse->statement->fetch(PDO::FETCH_ASSOC));
        return $episode;
    }
}