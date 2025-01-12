<?php namespace Entities;

class EpisodeEntity
{
    public $id_episode;
    public $titre;
    public $description;
    public $num_saison;
    public $num_episode;
    public $duree;
    public $note;
    public $id_serie;

    public function __construct($fields = [])
    {
        $this->id_episode = 0;
        foreach ($fields as $key => $value) {
            if (property_exists($this, $key)) {
                $this->{$key} = $value;
            }
        }
    }
}