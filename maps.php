<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="lib/windows/win.css">
    <link rel="stylesheet" href="style_.css">
    <link rel="stylesheet" href="lib/users/userlog/user.css">
</head>
<body>

<?php
    require 'lib/main/main.php';

    global $_JSEnable;
    $_JSEnable->enable('lib/main/main.js');

    require 'lib/users/userlog/user.php';

    $navInput = "maps";
    require 'nav.php';
?>

<!--  Logo </ -->

<div id="logo-contain">
    <img src="images/logo.png" style=" height:calc(100% - 30px); max-width:calc(100% - 30px);">
</div>

<!-- Logo />, Container </ -->

<div id="container">

    <h1 style="text-align: center; color: lightgray; letter-spacing: 0.2em;">Maps</h1>

    <center>
        <div class="search">
            <form>
                <label>SEARCH :<input type="text" style="vertical-align: middle"></label>
                <div class="greenbut button" onclick=""></div>
            </form>
            <div class="vr"></div>
            <img style="vertical-align: middle; height: 1.3em;" src="images/gear.png">
            <div class="vr"></div>
            <a href="old_mapeditor/mapeditor/index.html" class="graybut button">CREATE</a>
        </div>
    </center>

    <?php
    // Input parameters for search
    $schInput = [
            'db' => 'maps'
        ];

    require 'lib/search/sch.php';
    ?>

</div>

<!-- Container />, Footer </ -->

<div id="footer">

</div>

</body>

</html>


