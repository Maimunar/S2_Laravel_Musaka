@extends('master')

@section('recipesActive', 'class=active')

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
</br></br>
<form id="SubmitNewRecipeForm" action = "submitRecipe/post" method="post">
    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
    <p>Insert Recipe Name</p>
    <input type="text" name="name" value="" id="recipeNameBox">
    <p>Insert Introduction</p>
    <input type="text" name="introduction" value="" id="introductionBox">
    <p>Insert Picture URL(imgur)</p>
    <input type="text" name="picture" value="" id="pictureURLBox">
    <p>Insert Ingredients (Every one on a new line)</p>
    <textarea name="ingredients" value="" id="ingredientsBox"> </textarea>
    <p>Step 1</p>
    <textarea name="step1" id="step1Box"> </textarea>
    <?php
    for ($i = 2; $i <= 10; $i++){
        echo('<p>Step '.$i.' (Optional)</p>
            <textarea name="step'.$i.'" id="step'.$i.'Box"></textarea>');
    }?>
    </br></br>
    <input type="submit" value="Submit Recipe" name="recipeSubmit" id="submitRecipeBtn" class="recipeCheckoutBtn">
    </br></br>
</form>

@endsection
