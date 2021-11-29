<?php
namespace App\Models;
class Categorie {

    public $nom;
    public $description;


    public function __construct($nom, $description){
        $this->nom = $nom;
        $this->description = $description;
    }
}