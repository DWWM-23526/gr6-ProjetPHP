<?php namespace Entities;

class SerieGenreEntity
{
    public $id_serie;
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