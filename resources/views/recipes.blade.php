@extends('master')
<?php use \App\Http\Controllers\RecipesController; ?>
@section('recipesActive', 'class=active')

@section('content')
    <?php RecipesController::GenerateButtons();
    RecipesController::GenerateRecipeSubmitButton();?>

    <script src="https://unpkg.com/popmotion/dist/popmotion.global.min.js"></script>
    <script>
        const container = popmotion.styler(document.querySelector('.cards'));
        const button = popmotion.styler(document.querySelector('#recipeSubmitBtnContainer'));
        const popupAnimation = popmotion.tween({
            from: {
                y: -300,
                opacity: 0
            },
            to: {
                y: 0,
                opacity: 1
            },
            duration: 750
        })
        const blinkAnimation = popmotion.tween({
            from: {
                scale: .7,
                opacity: 0
            },
            to: {
                scale: 1,
                opacity: 1
            },
            duration: 750
        })
        popupAnimation.start(container.set);
        blinkAnimation.start(button.set);

    </script>
@endsection

