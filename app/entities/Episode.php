<?php namespace Entities;

class Episode
{
    public int $id_episode;
    public ?string $titre;
    public ?string $description;
    public ?int $numero_de_saison;
    public ?int $numero_d_episode;
    public ?int $duree;
    public ?float $note;
    public int $id_serie;

    function __construct($fields = []){
        foreach($fields as $k => $v){
            if(property_exists($this, $k))
                $this->{$k} = $v;
        }
    }

}