<?php

namespace App\Controllers;

use App\Models\Recipe;
use CodeIgniter\Controller;

class RecipesController extends Controller
{
    public function index(){
        echo view('templates/header');
        echo view('home');
        echo view('templates/footer');
    }

    public function get_recipes(){

    $model = model(Recipe::class);

    $data = [
        'recipes'  => $model->getRecipes(),
        'img_path' => 'assets/img/recipes_imgs/',
    ];

        echo view('templates/header', $data);
        echo view('recipes_list', $data);
        echo view('templates/footer', $data);
    }
}
