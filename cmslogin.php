<html>
<head>
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="css/inventeaze.css" rel="stylesheet" type="text/css">

    <script type="text/javascript">
        $(document).ready(function() {
            $('select').material_select();
        });
    </script>
</head>
<body>
<?php

    session_start();

    if(isset($_SESSION['logger'])) {

        header('Location: cmsindex.php');
        die;

    }
    else if(isset($_GET['problem'])) {
        ?>
        <div style="background-color: #8b1014; color: #ffffff; width: 100%; height: 40px; text-align: center;">
            Wrong Email/Password.
        </div>
    <?php
    }

?>

<nav class="white" role="navigation">
    <div class="nav-wrapper container">
        <a id="logo-container" href="#" class="brand-logo">Logo</a>
        <ul class="right hide-on-med-and-down">
            <li><a href="#">Navbar Link</a></li>
        </ul>

        <ul id="nav-mobile" class="side-nav">
            <li><a href="#">Navbar Link</a></li>
        </ul>
        <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
    </div>
</nav>


<div class="loginBlock yellow lighten-3 z-depth-3">




    <form action="Controllers/c_cmslogin.php" method="POST">
        <div class="row">
            <div class="input-field col s10">
                <input id="email" type="email" name="email" class="validate">
                <label for="Email">Email</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s10">
                <input id="pwd" type="password" name="password" class="validate">
                <label for="Password">Password</label>
            </div>
        </div>

        <!--div class="row input-field col s3">
                <select name="usertype">
                    <option value="1">Administrator</option>
                    <option value="2">Receptionist</option>
                </select>
        </div-->
        <div class="submit">
            <button class="btn waves-effect waves-light" name="btnlogincms" type="submit">Login
                <i class="mdi-content-send right"></i>
            </button>
        </div>
    </form>
</div>

<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>
