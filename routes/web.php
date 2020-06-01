<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', 'IndexController@show');
Route::get('/login', 'LoginController@show');
//Dishpage will need to have a /recipeName when you finish DB
Route::get('/dishpage', 'DishpageController@show');
Route::get('/profile', 'ProfileController@show');
Route::get('/recipes', 'RecipesController@show');
Route::get('/reviews', 'ReviewsController@show');
Route::get('/submitRecipe', 'SubmitRecipeController@show');
