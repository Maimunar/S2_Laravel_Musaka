<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;

class RecipesController extends Controller
{
    public function show()
    {
        return view('recipes');
    }

}?>
