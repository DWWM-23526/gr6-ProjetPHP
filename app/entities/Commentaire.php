<?php

namespace Entities;

class CommentaireEntity
{
    public $id_commentaire;
    public $contenu;
    public $date_publication;
    public $id_user;

    public function __construct($fields = [])
    {
        $this->id_commentaire = 0;
        foreach ($fields as $key => $value) {
            if (property_exists($this, $key)) {
                $this->{$key} = $value;
            }
        }
    }
}