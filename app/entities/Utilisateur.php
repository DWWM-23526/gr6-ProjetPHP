<?php namespace Entities;

class UtilisateurEntity
{
    public $id_utilisateur;
    public $nom;
    public $prenom;
    public $email;
    public $mdp;

    public function __construct($fields = [])
    {
        $this->id_utilisateur = 0;
        foreach ($fields as $key => $value) {
            if (property_exists($this, $key)) {
                $this->{$key} = $value;
            }
        }
    }
}