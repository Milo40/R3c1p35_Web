<?php

namespace App\Models;

use CodeIgniter\Model;

class Recipe extends Model
{
    protected $table = 'recipe';


    public function getRecipes(){
        return $this->findAll();
    }

    public function getRecipe($recip){
        return $this->where(['recipe_ID' => $recip])->first();
    }
}
