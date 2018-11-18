<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="lib/windows/win.css">
    <link rel="stylesheet" href="style_.css">
    <link rel="stylesheet" href="userlog/user.css">
</head>
<body>

<?php require 'lib/main/main.php'; ?>
<script type="text/javascript" src="/lib/main/main.js"></script>
<?php require 'userlog/user.php';  ?>

<!-- Navbar </ -->

<a class="nav a1" href="index.php">
    MAIN
</a>
<a class="nav a2" href="#">
    CLAN
</a>
<a class="nav a3" href="#">
    SESSIONS
</a>
<a class="nav a4 a_cur" href="maps.php">
    MAPS
</a>

<!-- Navbar />, Logo </ -->

<div id="logo-contain">
    <img src="images/logo.png" style=" height:calc(100% - 30px); max-width:calc(100% - 30px);">
</div>

<!-- Logo />, Container </ -->

<div id="container">

    <center>
        <div class="search">
            <form>
                <label>SEARCH :<input type="text" style="vertical-align: middle"></label>
                <div class="greenbut button" onclick=""></div>
            </form>
            <div class="vr"></div>
            <img style="vertical-align: middle; height: 1.3em;" src="images/gear.png">
            <div class="vr"></div>
            <div class="graybut button">CREATE YOUR OWN</div>
        </div>
    </center>

    <h1 style="text-align: center; color: lightgray; letter-spacing: 0.2em;">Maps</h1>

    <?php
    require 'mysqlin.php'; // Заходим в MySQL

    $sql = "SELECT * FROM maps";


    ?>

</div>

<!-- Container />, Footer </ -->

<div id="footer">

</div>

</body>

</html>


