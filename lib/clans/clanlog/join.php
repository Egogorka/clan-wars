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

<div class="window" id="clanJBI_win" style="
    width: 500px;
    height: 300px;

    background-color: #454545;
    box-shadow: inset 0 0 30px #070707;
">
    <div>
        <form id="join_form" action="/lib/clans/clanlog/joinAct.php" method="post">
            <p align="center">Type in the name of the clan you want to join</p>
            <label>Name: <input type="text" name="name"></label><br>
            <input type="submit" style="color:black;" value="Send">
        </form>
        <br>
        <button onclick="win_hide('clanJBI_win');">Close</button>
    </div>
</div>

<?php
////////////////////////////////////////////////////////////////////
// Личный JS код
////////////////////////////////////////////////////////////////////
?>

<script>

    GetByID('clanJBI').onclick = function () { win_show('clanJBI_win');};

    GetByID('join_form').onsubmit = function () {


    }

</script>