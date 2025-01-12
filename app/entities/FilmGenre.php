<?php namespace Entities;
class FilmGenreEntity
{
    public $id_film;
    public $id_genre;

    public function __construct($fields = [])
    {
        foreach ($fields as $key => $value) {
            if (property_exists($this, $key)) {
                $this->{$key} = $value;
            }
        }
    }
}