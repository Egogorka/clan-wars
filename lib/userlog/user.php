
<!-- mod start -->

<?php

////////////////////////////////////////////////////////////////////
// Подключаем скрипты, если ещё не подключили, с помощью JSEnable
////////////////////////////////////////////////////////////////////

    global $_JSEnable;
    $_JSEnable->enable("/lib/windows/win.js");

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
        <form id="log_form" action="/lib/userlogrlog/login.php" method="post">
            <p align="center">Login in</p>
            <label><input type="text" name="login"> Login</label><br>
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
        <form id="reg_form" action="/lib/userlogrlog/login.php" method="post">
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

    let logImg = GetByID("logImg");
    logImg.style.top = window.innerHeight/2 - 3*logImg.offsetHeight/2 + "px";
    logImg.style.left = '0px';

    GetByID('logImg').onclick = function () {win_show('login_window'); };

    var form = GetByID('log_form');
    form.onsubmit = function () {

        var message = {
            login : form.elements.login.value,
            pass  : form.elements.pass.value,
            type  : 'login',
        };

        AjaxRequest('POST','/lib/userlog/login.php',JSON.stringify(message),function (response) {
            alert(response);
            if (response === 'Logged successfully') window.location.reload();
        },function () {alert('Time out');}, 7000);

        return false;
    };

    form = GetByID('reg_form');
    form.onsubmit = function () {

        var message = {
            login : form.elements.login.value,
            pass  : form.elements.pass.value,
            email : form.elements.email.value,
            type  : 'regis',
        };

        AjaxRequest('POST','/lib/userlog/login.php',JSON.stringify(message),function (response) {
            alert(response);
        },function () {alert('Time out');}, 7000);

        return false;
    };

</script>

<!-- mod end -->