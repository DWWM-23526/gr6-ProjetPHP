<?php namespace Entities;

class GenreEntity
{
    public $id_genre;
    public $nom;

    public function __construct($fields = [])
    {
        $this->id_genre = 0;
        foreach ($fields as $key => $value) {
            if (property_exists($this, $key)) {
                $this->{$key} = $value;
            }
        }
    }
}