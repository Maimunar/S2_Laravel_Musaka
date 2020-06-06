<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use App\Recipe;

class RecipesController extends Controller
{
    public function show()
    {
        return view('recipes');
    }

    public static function GenerateButtons()
    {
        $recipes = Recipe::all();
        echo('
        <div id="boxes">
        <div class="cards">');
        foreach ($recipes as $recipe) {
            $introduction = substr($recipe->introduction, 0, 50) . "...";

            echo('
            <div class="one_card">
            <div class="image_card">
              <img src="' . $recipe->picture . '">
            <div class="content_card">
              <h4>' . ucfirst($recipe->name) . '</h4>
              <p>' . $introduction . '</p>
            <div class="buttons_card">');
            self::RedirectToWebsite($recipe->id);
            echo('</div>
             </div>
           </div>
         </div>');
        }
        echo('    </div>
                </div>');
    }

    public static function RedirectToWebsite($recipeId)
    {
        echo("<a class=\"recipeCheckoutBtn\" href=\"/dishpage/" . $recipeId . "\">Check Recipe</a>");
//        if (isset($_SESSION["username"])) {
//            if (isset($_SESSION["freeChecks"]) && $_SESSION["freeChecks"] <= 0) {
//                echo("<a class=\"recipeCheckoutBtn\" href=\"tooMuchRecipeViews\">Check Recipe</a>");
//            }
//            else {
//                echo ("<a class=\"recipeCheckoutBtn\" href=\"/dishpage/".$recipeName."\">Check Recipe</a>");
//            }
//        } else {
//            echo ("<a class=\"recipeCheckoutBtn\"href=\"notLoggedIn\">Check Recipe</a>");
//        }
    }

    public static function GenerateRecipeSubmitButton()
    {
        //if (isset($_SESSION["username"])){
        echo('<div class="buttons_card" id="recipeSubmitBtnContainer">
      <a class="recipeCheckoutBtn" href="../submitRecipe">Submit a new recipe!</a>
    </div>');
        //  }
    }

    public static function GenerateRecipePage($recipeId)
    {
        $recipe = Recipe::find($recipeId);
        $steps = array($recipe->step1, $recipe->step2, $recipe->step3,
            $recipe->step4, $recipe->step5, $recipe->step6, $recipe->step7,
            $recipe->step8, $recipe->step9, $recipe->step10);
        echo ("<div class='dishpageintro'>
        <h5>".$recipe->introduction."</h5>
        <img src='".$recipe->picture."'class='dishpagephoto'></img>
        <p class='ingredients'>
          Ingredients: <br/>");
        $ingredientArray = explode("\n", $recipe->ingredients);
        foreach($ingredientArray as $ing){
            echo($ing);
            echo("<br/>");
        }
        echo("</p></div>
      <article>
        <div class='timeline'>");
        $index = 1;
        foreach($steps as $step){
            if (!is_null($step) && !empty($step)){
                if ($index % 2 == 1) {
                    echo ("<div class='dishpagecontainer left'>");
                }
                else {
                    echo("<div class='dishpagecontainer right'>");
                }
                echo("<div class='dishpagecontent'>
                  <h2>Step ".$index."</h2>
                  <p>".$step."</p>
                </div>
              </div>");
                $index++;
            }
        }
        echo ("</div></article>");
    }
}



?>
