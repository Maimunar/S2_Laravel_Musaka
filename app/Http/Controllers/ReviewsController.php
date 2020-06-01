<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;

class ReviewsController extends Controller
{
    public function show()
    {
        return view('reviews');
    }

}?>
