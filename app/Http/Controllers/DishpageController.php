<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Recipe;
use App\User;
use Illuminate\Http\Request;


class DishpageController extends Controller
{
    public function show($recipeId)
    {
        return view('dishpage', ['recipeId' => $recipeId]);
    }
    public function SubmitRecipe(Request $request){
        $request->validate([
            'name' => 'required',
            'introduction' => 'required',
            'picture' => 'required',
            'ingredients' => 'required',
            'step1' => 'required'
        ]);
        $recipe = new Recipe();
        $recipe->name = $request->name;
        $recipe->introduction = $request->introduction;
        $recipe->picture = $request->picture;
        $recipe->ingredients = $request->ingredients;
        $recipe->step1 = $request -> step1;
        $recipe->step2 = $request -> step2;
        $recipe->step3 = $request -> step3;
        $recipe->step4 = $request -> step4;
        $recipe->step5 = $request -> step5;
        $recipe->step6 = $request -> step6;
        $recipe->step7 = $request -> step7;
        $recipe->step8 = $request -> step8;
        $recipe->step9 = $request -> step9;
        $recipe->step10 = $request -> step10;

        $recipe->save();
        return view('recipes');
        }

}?>
