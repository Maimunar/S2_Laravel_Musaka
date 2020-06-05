@extends('master')

@section('loginActive', 'class=active')

@section('content')

    <div class="container" id="container">
        <div class="form-container sign-in-container">
            <form id="signin" action="../../Model/signin.php" method="POST" onsubmit="return validateLogin();">
                <h1>Sign In</h1>
                <p>Login into your account</p>
                <input id="userLogin" type="username" name="user" placeholder="Username">
                <input id="passLogin" type="password" name="pass" placeholder="Password">
                <span id="messages" style="color: red;"></span>
                <a href="forgotten.php" id="forgotten">Forgotten password?</a>
                <button>Sign In</button>
            </form>

        </div>
        <div class="overlay-panel overlay-right">
            <form id="register" action="../../Model/register.php" onsubmit="return validateForm();" method="POST">
                <h1>Welcome!</h1>
                <p>Don't have an account? Create one easily</p>
                <input id="email" type="text" name="email" placeholder="E-mail" pattern="[^ @]*@[^ @]*" required>
                <input id="user" type="username" name="user" placeholder="Username">
                <input id="pass" type="password" name="pass" placeholder="Password">
                <input id="confirm-pass" type="password" name="confirm-pass" placeholder="Confirm Password">
                <span id="messages2" style="color: red;"></span>
                <button class="ghost" name="signUp" type="submit">Sign Up</button>
            </form>
        </div>
    </div>
    <footer>
        Bulgarian Culinary Recipes provided by Fontys University of Applied Science Students Aleksandar Ivanov and Ivan Ivanov
    </footer>
    <script type="text/javascript" src="../../Scripts/validation.js"></script>
    <script src="https://unpkg.com/popmotion/dist/popmotion.global.min.js"></script>
    <script>
        const container = popmotion.styler(document.querySelector('#container'));
        popmotion.tween({
            from: {
                opacity: 0
            },
            to: {
                opacity: 1
            },
            duration: 600
        })
            .start(container.set);
    </script>
@endsection
