<?
include "config.php";

$select = "SELECT * FROM `goodsForCart`";
$result = mysqli_query($connect, $select);

$name = [];
$price = [];
$addr = [];
$count = 0;

while ($data = mysqli_fetch_assoc($result)) {
    $name[$count] = $data["name"];
    $price[$count] = $data["price"];
    $addr[$count] = $data["addr"];
    $count++;
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Cart</title>
</head>
<body>
<h1>Корзина</h1>

<button class="usersButton">Главная страница</button>
<button class="usersButton1">Страница покупок</button>
<button class="usersButton2">Корзина</button>

<div class="bigCart">
    <?php

    for($c = 0; $c != count($name); $c++) {

        echo "<div class='goods'>";
        echo "<p class='nameGoods'>$name[$c]</p>";
        echo "<a class='photoGoods' href='good_page.php?x=$c'><img src='$addr[$c]' width='290px' height='200px' alt='test'></a>";
        echo "<button class='cartButton'>Удалить";
        echo "<p class='priceCart'>$price[$c]р</p>";
        echo "</div>";
    }


    //?>


</div>

</body>
</html>