<?php namespace Entities;

class FilmEntity
{
    public $id_film;
    public $titre;
    public $description;
    public $date_sortie;
    public $duree;
    public $note;

    public function __construct($fields = [])
    {
        $this->id_film = 0;
        foreach ($fields as $key => $value) {
            if (property_exists($this, $key)) {
                $this->{$key} = $value;
            }
        }
    }
}