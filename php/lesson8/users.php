<?
include_once "server.php";
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Users</title>
</head>

<body>

<a href="index.php"><button class="adminButton">Выход</button></a>
<a href="users.php"><img class="logo" src="photos/logo.jpg" width="150" height="150"></a>
<a href="cart.php"><img class="cart" src="photos/cart.jpg" width="150" height="150"></a>

<div class="bigUsers">
    <?php
        allGoodsUsers($name, $photo, $price);
    ?>


</div>
</body>
</html>