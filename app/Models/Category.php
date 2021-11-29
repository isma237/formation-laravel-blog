<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    //Retourner l'ensemble des articles d'un objet de type Category
    
    public function articles(){
        return $this->hasMany(Article::class);
    }
}
