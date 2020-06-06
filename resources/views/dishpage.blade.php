@extends('master')
<?php use \App\Http\Controllers\RecipesController; ?>
@section('recipesActive', 'class=active')

@section('content')
  <?php RecipesController::GenerateRecipePage($recipeId);?>

@endsection
