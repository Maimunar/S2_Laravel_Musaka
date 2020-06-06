<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RedirectController extends Controller
{
    public function tooMuchRecipeViews(){
        echo("You have used all your free views as a normal user, consider subscribing!<br><br>");
        echo("Redirecting you back to front page...");
        header( "refresh:3;url=../.." );
    }
    public function notLoggedIn(){
        echo("You can't visit this page without being logged in! <br><br>");
        echo("Redirecting you back to front page...");
        header( "refresh:3;url=../.." );
    }
    public function logOut(){
        session_start();
        unset($_SESSION["username"]);
        unset($_SESSION["freeChecks"]);
        session_destroy();
        header("Location: ..");
    }
}
