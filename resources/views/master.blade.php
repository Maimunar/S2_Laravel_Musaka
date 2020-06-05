<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" media="(max-width: 640px)" href="<?php echo asset('css/smallstyle.css')?>">
    <link rel="stylesheet" media="(min-width: 640px)" href="<?php echo asset('css/style.css')?>">
    <title>Musaka - Bulgarian Recipes</title>

    <!--Script used from online to create the line icon when screen is small -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

</head>
<body class="home">
<nav>
    <input type="checkbox" id="check">
    <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
    </label>
    <img  src="<?php echo asset('images/Logo2.png')?>" alt="logo" id="headerlogo" height="150px" width="150px"></img>
    <ul>
        <!-- For something to be active, you need to add class="active" to the yield -->
        <li><a @yield('homeActive') href="..">Home</a></li>
        <li><a @yield('recipesActive') href="recipes">Recipes</a></li>
        <?php if (isset($_SESSION["username"])){
            echo ("<li><a ");
            ?> @yield('profileActive') <?php
            echo("href=\"profile\">Profile</a> </li>");
        } ?>
        <li>
            <?php if(isset($_SESSION["username"])){
                echo ("<a ");
                ?> @yield('loginActive') <?php
                echo(" href=\"logout\">Logout</a>");
            }
            else{
                echo ("<a ");
               ?> @yield('loginActive') <?php
                echo (" href=\"login\">Login</a>");
            } ?>
        </li>
    </ul>
</nav>
@yield('content')

<footer>
    Bulgarian Culinary Recipes provided by Fontys University of Applied Science Students Aleksandar Ivanov and Ivan Ivanov
</footer>
</body>
</html>
