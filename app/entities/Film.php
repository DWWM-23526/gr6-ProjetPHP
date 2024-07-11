<?php namespace Entities;

class Film
{
    public int $id_Film;
    public ?string $titre;
    public ?string $description;
    // public ?string $img_src;
    public ?string $Date_de_sortie;
    public ?string $Durée;
    public ?float $Note;

    function __construct($fields = []){
        foreach($fields as $k => $v){
            if(property_exists($this, $k)){
                $this->{$k} = $v;
            }
        }
    }
}