<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;

class DishpageController extends Controller
{
    public function show()
    {
        return view('dishpage');
    }

}?>
