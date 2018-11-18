
<!-- mod start -->

<?php

/*
 * User Interface and Realization
 */

////////////////////////////////////////////////////////////////////
// Подключаем скрипты, если ещё не подключили, с помощью JSEnable
////////////////////////////////////////////////////////////////////
?>

<?php
    global $_JSEnable;
    $_JSEnable->enable("/lib/windows/win.js");
?>

<?php
////////////////////////////////////////////////////////////////////
// HTML блок
////////////////////////////////////////////////////////////////////
?>

<div id="logImg">
    <img src="/images/user.png" style="width: 80px; margin: 10px;">
</div>

<div class="window" id="login_window" style="
    width: 500px;
    height: 500px;

    background-color: #454545;
    box-shadow: inset 0 0 30px #070707;
">
    <div>
        <form id="log_form" action="/userlog/login.php" method="post">
            <p align="center">Login in</p>
            <label><input type="text" name="login">Login</label><br>
            <label><input type="password" name="pass"> Password</label><br>
            <input type="submit" style="color:black;" value="Send">
        </form>
        <br>
        <button onclick="win_hide('login_window')">Close</button>
        <br>
        <button onclick="win_show('regis_window'); win_hide('login_window')">Register</button>
    </div>
</div>

<div class="window" id="regis_window" style="
    width: 500px;
    height: 500px;

    background-color: #454545;
    box-shadow: inset 0 0 30px #070707;
">
    <div>
        <form id="reg_form" action="/userlog/login.php" method="post">
            <p align="center">Sign up</p>
            <label><input type="text" name="login"> Login</label><br>
            <label><input type="password" name="pass"> Password</label><br>
            <label><input type="email" name="email">Email</label><br>
            <input type="submit" style="color:black;" value="Send">
        </form>
        <button onclick="win_hide('regis_window')">Close</button>
    </div>
</div>

<?php
////////////////////////////////////////////////////////////////////
// Личный JS код
////////////////////////////////////////////////////////////////////
?>

<script type="text/javascript">

    window.addEventListener('load', function() {
        // Center(GetByID("logImg"),document. 'center', 'left', 0, 0, 3, 0);
        let logImg = GetByID("logImg");
        logImg.style.top = window.innerHeight/2 - 3*logImg.offsetHeight/2 + "px";
        logImg.style.left = '0px';
    });

    GetByID('logImg').onclick = function () {win_show('login_window'); };

    var logform = GetByID('log_form');
    logform.onsubmit = function () {

        var message = {
            login : logform.elements.login.value,
            pass  : logform.elements.pass.value,
            type  : 'login',
        };

        AjaxRequest('POST','/userlog/login.php',JSON.stringify(message),function (response) {
            alert(response);
        },function () {return false;});

        return false;
    };

    var regform = GetByID('reg_form');
    regform.onsubmit = function () {

        var message = {
            login : regform.elements.login.value,
            pass  : regform.elements.pass.value,
            email : regform.elements.email.value,
            type  : 'regis',
        };

        AjaxRequest('POST','/userlog/login.php',JSON.stringify(message),function (response) {
            alert(response);
        },function () {return false;});

        return false;
    };

</script>

<!-- mod end -->