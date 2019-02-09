
<?
include "server.php";
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Start page</title>
</head>

<body>

<h2>Bike shop</h2>
<div class="blockForm">
    <form class="formGoods" action="server.php?tag=3" method="POST">
        <input type="submit" value="Войти" style="width: 100px; height: 25px"><br>
        <input class="inputGoods" type="text" name="login" placeholder="login"><br>
        <input class="inputGoods" type="text" name="pass" placeholder="password">
    </form>
    <form class="formGoods2" action="server.php?tag=4" method="POST">
        <input type="submit" value="Зарегистрироваться" style="width: 150px; height: 30px"><br>
        <input class="inputGoods" type="text" name="login" placeholder="login"><br>
        <input class="inputGoods" type="text" name="pass" placeholder="password">
    </form>
</div>
<div class="big">
<?php
    allGoodsIndex($name, $photo, $price);
?>


</div>
</body>
</html>