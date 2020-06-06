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
Route::get('/dishpage/{recipeId}', 'DishpageController@show');

Route::get('/profile', 'ProfileController@show');
Route::get('/recipes', 'RecipesController@show');
Route::get('/reviews', 'ReviewsController@show');
Route::get('/submitRecipe', 'SubmitRecipeController@show');
Route::post('/submitRecipe/post', 'DishpageController@SubmitRecipe');
//Redirect on wrong credentials/other
Route::get('/tooMuchRecipeViews', 'RedirectController@tootooMuchRecipeViews');
Route::get('/notLoggedIn', 'RedirectController@notLoggedIn');
Route::get('/logout', 'RedirectController@logOut');
