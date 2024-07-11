<?php namespace Repositories;
    use PDO;
    use Entities\Film;

class FilmRepository extends BaseRepository
{
    public function getAll(){
        $queryResponse = $this->preparedQuery("SELECT * FROM article");
        $articles = $queryResponse->statement->fetchAll(PDO::FETCH_CLASS,"Entities\Article");
        return $articles;
    }
    public function getLastPublishedArticles($qty){
        $sql = "SELECT * FROM article ORDER BY ? DESC LIMIT $qty;";
        $queryResponse = $this->preparedQuery($sql, ['published_at']);
        $articles = $queryResponse->statement->fetchAll(PDO::FETCH_CLASS,"Entities\Article");
        return $articles;
    }
    public function getOneById($id){
        $queryResponse = $this->preparedQuery("SELECT * FROM article WHERE Id_article = ?", [$id]);
        $article = new Article($queryResponse->statement->fetch(PDO::FETCH_ASSOC));
        return $article;
    }
}